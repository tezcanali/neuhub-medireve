<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AfterTreatment extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.after-treatment')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(2),
                Repeater::make('items')
                    ->label('Maddeler')
                    ->schema([
                        TextInput::make('number')
                            ->label('Numara')
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('subtitle')
                            ->label('Alt Başlık')
                            ->required()
                            ->columnSpan(4),
                        RichEditor::make('content')
                            ->label('İçerik')
                            ->columnSpan(6),
                    ])
                    ->defaultItems(6)
                    ->maxItems(6)
                    ->columns(6)
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
