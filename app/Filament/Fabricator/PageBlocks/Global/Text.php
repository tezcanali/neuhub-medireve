<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Text extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.text')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                    TinyEditor::make('content')
                    ->label('İçerik')
                    ->required()
                    ->columnSpan(6),
            ])
            ->columns(6);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}