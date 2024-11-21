<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ImageText extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.image-text')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('subtitle')
                    ->label('Alt Başlık')
                    ->required()
                    ->columnSpan(3),

                FileUpload::make('content_image')
                    ->label('İçerik Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/image-text')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),

                RichEditor::make('content')
                    ->label('İçerik')
                    ->columnSpan(6),
            ])
            ->columns(6)->visible(fn($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
