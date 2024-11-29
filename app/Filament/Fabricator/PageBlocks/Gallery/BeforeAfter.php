<?php

namespace App\Filament\Fabricator\PageBlocks\Gallery;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BeforeAfter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('gallery.before-after')
            ->schema([
                TextInput::make('title')
                ->label('Başlık'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
