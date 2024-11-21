<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BeforeAfter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.before-after')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('description')
                    ->label('Açıklama')
                    ->required()
                    ->columnSpan(2),
                Textarea::make('footer_note')
                    ->label('Alt Not')
                    ->required()
                    ->columnSpan(2),
                Repeater::make('images')
                    ->label('Görseller')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('treatments/before-after')
                            ->optimize('webp')
                            ->acceptedFileTypes([
                                'image/*'
                            ])
                            ->columnSpan(2),
                    ])
                    ->defaultItems(5)
                    ->maxItems(10)
                    ->columns(2)
                    ->collapsed()
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}