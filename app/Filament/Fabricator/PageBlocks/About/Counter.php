<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Counter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.counter')
            ->schema([
                Repeater::make('counters')
                    ->label('Sayaçlar')
                    ->schema([
                        TextInput::make('count')
                            ->label('Sayı')
                            ->required()
                            ->default('7k+')
                            ->columnSpan(2),

                        TextInput::make('title')
                            ->label('Başlık')
                            ->required()
                            ->default('Completed Procedures')
                            ->columnSpan(4),
                    ])
                    ->defaultItems(4)
                    ->maxItems(4)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn (array $state): ?string => $state['count'] . ' - ' . $state['title'] ?? null)
                    ->columns(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'about');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}