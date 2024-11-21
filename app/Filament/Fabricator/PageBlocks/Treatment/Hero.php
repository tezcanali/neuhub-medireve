<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.hero')
            ->schema([
                FileUpload::make('hero_image')
                    ->label('Hero Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/hero')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),
                    
                TextInput::make('rating')
                    ->label('Değerlendirme Puanı')
                    ->required()
                    ->columnSpan(2),

                TextInput::make('alert_text')
                    ->label('Üst Bildirim Metni')
                    ->required()
                    ->columnSpan(4),

                TextInput::make('alert_subtext')
                    ->label('Üst Bildirim Alt Metni')
                    ->required()
                    ->columnSpan(6),

                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('description')
                    ->label('Açıklama')
                    ->required()
                    ->columnSpan(6),

                TextInput::make('button_text')
                    ->label('Buton Metni')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('button_link')
                    ->label('Buton Linki')
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