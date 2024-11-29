<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.hero')
            ->schema([
                Tabs::make('Hero Ayarları')
                    ->tabs([
                        // Hero Tab'i
                        Tabs\Tab::make('hero')
                            ->label('Hero Slider')
                            ->schema([
                                Repeater::make('slides')
                                    ->label('Slider')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ->required()
                                            ->columnSpan(4),

                                        TextInput::make('description')
                                            ->label('Açıklama')
                                            ->required()
                                            ->columnSpan(4),

                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('home/hero-images')
                                            ->columnSpanFull(),
                                    ])
                                    ->collapsible()
                                    ->collapsed()
                                    ->reorderableWithButtons()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null),
                            ]),

                        // Treatments Tab'i
                        Tabs\Tab::make('treatments')
                            ->label('Tedavi Listesi')
                            ->schema([
                                TextInput::make('treatment_title')
                                    ->label('Tedavi Başlığı'),

                                TextInput::make('treatment_description')
                                    ->label('Tedavi Açıklaması'),

                                Repeater::make('treatments')
                                    ->label('Tedaviler')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Tedavi Adı')
                                            ->required(),

                                        TextInput::make('link')
                                            ->label('Tedavi Linki')
                                            ->required(),

                                        FileUpload::make('image')
                                            ->label('Tedavi Görseli')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('treatment-images'),

                                    ])
                                    ->collapsible()
                                    ->collapsed()
                                    ->reorderableWithButtons()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null),
                            ])
                    ])
            ])->visible(fn ($get) => $get('../layout') == 'home');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
