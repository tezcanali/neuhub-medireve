<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class LeftTextSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.left-text-slider')
            ->schema([
                Tabs::make('Sol Metin ve Slider Ayarları')
                    ->tabs([
                        Tabs\Tab::make('content')
                            ->label('İçerik')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->required(),

                                TextInput::make('subtitle')
                                    ->label('Alt Başlık')
                                    ->required(),

                                Textarea::make('description')
                                    ->label('Açıklama'),
                            ]),

                        Tabs\Tab::make('slider')
                            ->label('Slider')
                            ->schema([
                                Repeater::make('slides')
                                    ->label('Görseller')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('home/awareness-images')
                                            ->optimize('webp')
                                            ->columnSpanFull(),
                                    ])
                                    ->collapsible()
                                    ->reorderableWithButtons(),
                            ]),
                    ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
