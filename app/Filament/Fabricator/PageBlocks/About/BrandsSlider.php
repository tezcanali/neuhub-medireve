<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BrandsSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.brands-slider')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                Repeater::make('brands')
                    ->label('Markalar')
                    ->schema([
                        FileUpload::make('brand_logo')
                            ->label('Marka Logosu')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('about/brands-slider')
                            ->optimize('webp')
                            ->deletable(true)
                            ->acceptedFileTypes(['image/*'])
                            ->columnSpan(3),

                        TextInput::make('brand_link')
                            ->label('Marka Linki')
                            ->default('#')
                            ->required()
                            ->columnSpan(3),
                    ])
                    ->defaultItems(6)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn (array $state): ?string => $state['brand_link'] ?? null)
                    ->columns(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'about');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}