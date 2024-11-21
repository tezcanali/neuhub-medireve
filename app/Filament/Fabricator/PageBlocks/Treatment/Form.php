<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Form extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.form')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(2),
                FileUpload::make('find_image')
                    ->label('Form Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/form')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes([
                        'image/*'
                    ])
                    ->columnSpan(2),
                TextInput::make('subtitle')
                    ->label('Alt Başlık')
                    ->required()
                    ->columnSpan(2),
                Select::make('services')
                    ->label('Hizmetler')
                    ->multiple()
                    ->options([
                        'Plastic' => 'Plastic',
                        'Hair' => 'Hair',
                        'Dental' => 'Dental',
                    ])
                    ->required()
                    ->columnSpan(2),
                TextInput::make('recaptcha_key')
                    ->label('reCAPTCHA Site Key')
                    ->required()
                    ->columnSpan(2),
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}