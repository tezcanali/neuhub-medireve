<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Faq extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.faq')
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
                    ->directory('treatments/faq')
                    ->optimize('webp')
                    ->acceptedFileTypes([
                        'image/*'
                    ])
                    ->columnSpan(2),
                Repeater::make('questions')
                    ->label('Sorular')
                    ->schema([
                        TextInput::make('question')
                            ->label('Soru')
                            ->required()
                            ->columnSpan(6),
                        Textarea::make('answer')
                            ->label('Cevap')
                            ->required()
                            ->columnSpan(6),
                    ])
                    ->collapsed()
                    ->defaultItems(5)
                    ->columns(6)
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}