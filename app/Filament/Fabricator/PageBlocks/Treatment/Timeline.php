<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Timeline extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.timeline')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('description')
                    ->label('Açıklama')
                    ->required()
                    ->columnSpan(6),

                FileUpload::make('background_image')
                    ->label('Arka Plan Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/timeline')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),

                Repeater::make('timeline_items')
                    ->label('Zaman Çizelgesi Öğeleri')
                    ->schema([
                        TextInput::make('period_title')
                            ->label('Dönem Başlığı')
                            ->required()
                            ->columnSpan(3),

                        TextInput::make('period_range')
                            ->label('Dönem Aralığı')
                            ->required()
                            ->columnSpan(3),

                        Textarea::make('content')
                            ->label('İçerik')
                            ->required()
                            ->columnSpan(6),
                    ])
                    ->defaultItems(6)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn (array $state): ?string => $state['period_title'] . ' ' . $state['period_range'] ?? null),

                Textarea::make('note')
                    ->label('Not')
                    ->required()
                    ->columnSpan(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}