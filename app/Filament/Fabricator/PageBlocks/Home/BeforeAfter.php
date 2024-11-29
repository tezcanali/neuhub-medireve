<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BeforeAfter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.before-after')
            ->schema([
                Tabs::make('Before After Ayarları')
                    ->tabs([
                        Tabs\Tab::make('header')
                            ->label('Başlık Ayarları')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->default('Before & After')
                                    ->required(),

                                Textarea::make('description')
                                    ->label('Açıklama')
                                    ->default('For example, in hair transplants, "before" images typically show areas of thinning or balding, while "after" images reveal fuller, thicker hair after the treatment.')
                                    ->rows(3),

                                Textarea::make('footer_text')
                                    ->label('Alt Açıklama')
                                    ->default('*In the context of cosmetic or medical procedures, such as a hair transplant, "before and after" images or descriptions highlight the difference in appearance from the initial condition to the improved result. These comparisons are often used to demonstrate the effectiveness of a procedure.')
                                    ->rows(3),
                            ]),

                        Tabs\Tab::make('gallery')
                            ->label('Galeri')
                            ->schema([
                                Repeater::make('images')
                                    ->label('Görseller')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('home/before-after')
                                            ->optimize('webp')
                                            ->columnSpanFull(),
                                    ])
                                    ->collapsible()
                                    ->reorderableWithButtons(),
                            ]),
                    ])
            ])->label('Home Before After');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
