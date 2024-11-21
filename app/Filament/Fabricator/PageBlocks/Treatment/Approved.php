<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use App\Models\Doctor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Approved extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.approved')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->default('Approved By')
                    ->required()
                    ->columnSpan(2),
                Select::make('doctors')
                    ->label('Doktorlar')
                    ->multiple()

                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }
}
