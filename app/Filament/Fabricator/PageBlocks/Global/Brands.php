<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Brands extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.brands')
            ->schema([
                Repeater::make('brands')
                    ->label('Markalar')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Logo')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('treatments/brands')
                            ->optimize('webp')
                            ->acceptedFileTypes([
                                'image/*'
                            ])
                            ->columnSpan(6),
                        TextInput::make('url')
                            ->label('Link')
                            ->url()
                            ->columnSpan(6),
                    ])
                    ->defaultItems(4)
                    ->columns(4)
                    ->collapsed()
                    ->columnSpanFull()
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
