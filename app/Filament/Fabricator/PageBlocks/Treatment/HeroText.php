<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroText extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.hero-text')
            ->schema([
                TextInput::make('title_line1')
                    ->label('Başlık İlk Satır')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('title_line2')
                    ->label('Başlık İkinci Satır')
                    ->required()
                    ->columnSpan(3),

                Textarea::make('description')
                    ->label('Açıklama')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('content')
                    ->label('İçerik')
                    ->required()
                    ->columnSpan(6),

                TextInput::make('note')
                    ->label('Not')
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

                FileUpload::make('content_image')
                    ->label('İçerik Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/hero-text')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes([
                        'image/*'
                    ])
                    ->columnSpan(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}