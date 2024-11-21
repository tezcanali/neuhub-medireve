<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Trustpilot extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.trustpilot')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                FileUpload::make('meet_image')
                    ->label('Meet Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/trustpilot')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(3),

                FileUpload::make('trustpilot_logo')
                    ->label('Trustpilot Logo')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/trustpilot')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(3),

                TextInput::make('review_count')
                    ->label('Yorum Sayısı')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('rating_text')
                    ->label('Değerlendirme Metni')
                    ->required()
                    ->columnSpan(3),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}