<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ProcessList extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.process-list')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('description')
                    ->label('Açıklama')
                    ->required()
                    ->columnSpan(6),

                TextInput::make('button_text')
                    ->label('Buton Metni')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('button_link')
                    ->label('Buton Linki')
                    ->required()
                    ->columnSpan(3),

                Repeater::make('process_items')
                    ->label('Süreç Öğeleri')
                    ->schema([
                        TextInput::make('title')
                            ->label('Başlık')
                            ->required(),

                        TextInput::make('icon_path')
                            ->label('İkon SVG Yolu')
                            ->required()
                            ->helperText('SVG yolunu buraya yapıştırın'),

                        TextInput::make('link')
                            ->label('Link')
                            ->default('#'),
                    ])
                    ->defaultItems(6)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null),

                TextInput::make('bottom_title')
                    ->label('Alt Başlık')
                    ->required()
                    ->columnSpan(6),

                Repeater::make('brands')
                    ->label('Logolar')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('global/process-list')
                            ->optimize('webp')
                            ->deletable(true)
                            ->acceptedFileTypes(['image/*'])
                            ->columnSpanFull()
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->columnSpan(6),
            ])
            ->columns(6);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
