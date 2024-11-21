<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Costs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.costs')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(2),
                FileUpload::make('background_image')
                    ->label('Arkaplan Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/costs')
                    ->optimize('webp')
                    ->acceptedFileTypes([
                        'image/*'
                    ])
                    ->columnSpan(2),
                Repeater::make('costs')
                    ->label('Ülkeler')
                    ->schema([
                        TextInput::make('country')
                            ->label('Ülke')
                            ->required()
                            ->columnSpan(3),
                        TextInput::make('price')
                            ->label('Fiyat')
                            ->required()
                            ->columnSpan(3),
                        Textarea::make('inclusions')
                            ->label('Dahil Olanlar')
                            ->required()
                            ->columnSpan(6),
                    ])
                    ->defaultItems(3)
                    ->columns(6)
                    ->collapsed()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->label('Alt Açıklama')
                    ->required()
                    ->columnSpan(2),
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}