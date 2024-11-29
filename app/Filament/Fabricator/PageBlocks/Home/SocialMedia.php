<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SocialMedia extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.social-media')
            ->schema([
                TextInput::make('username')
                    ->label('Kullanıcı Adı')
                    ->default('@medireve')
                    ->required(),

                TextInput::make('display_name')
                    ->label('Görünen İsim')
                    ->default('Medireve')
                    ->required(),

                TextInput::make('instagram_link')
                    ->label('Instagram Linki')
                    ->default('https://www.instagram.com/medireve')
                    ->url()
                    ->required(),

                TextInput::make('post_count')
                    ->label('Gönderi Sayısı')
                    ->default('26')
                    ->numeric()
                    ->required(),

                TextInput::make('followers_count')
                    ->label('Takipçi Sayısı')
                    ->required(),

                TextInput::make('following_count')
                    ->label('Takip Edilen Sayısı')
                    ->default('7')
                    ->numeric()
                    ->required(),

                Repeater::make('gallery')
                    ->label('Galeri')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('home/social-media')
                            ->optimize('webp')
                            ->columnSpanFull(),
                            
                        TextInput::make('link')
                            ->label('Görsel Linki')
                            ->url()
                            ->nullable(),
                    ])
                    ->defaultItems(7)
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->reorderableWithButtons(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}