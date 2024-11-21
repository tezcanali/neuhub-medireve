<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PatientReview extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.patient-review')
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
                    ->default('See how our patients\' hair transplant Turkey experiences were! They genuinely share their own stories and reviews about the operation itself and the services they got!')
                    ->required()
                    ->columnSpan(6),

                Repeater::make('reviews')
                    ->label('Hasta Yorumları')
                    ->schema([
                        FileUpload::make('review_image')
                            ->label('Hasta Görseli')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('treatments/patient-reviews')
                            ->optimize('webp')
                            ->deletable(true)
                            ->acceptedFileTypes(['image/*'])
                            ->columnSpan(6),

                        TextInput::make('patient_name')
                            ->label('Hasta Adı')
                            ->required()
                            ->columnSpan(6),

                        TextInput::make('procedure_text')
                            ->label('İşlem Metni')
                            ->required()
                            ->columnSpan(6),

                        TextInput::make('review_link')
                            ->label('Yorum Linki')
                            ->default('#')
                            ->required()
                            ->columnSpan(6),
                    ])
                    ->defaultItems(4)
                    ->columnSpanFull()
                    ->collapsible()
                    ->itemLabel(fn (array $state): ?string => $state['patient_name'] ?? null),

                TextInput::make('why_title')
                    ->label('Neden Başlığı')
                    ->required()
                    ->columnSpan(6),

                FileUpload::make('why_image')
                    ->label('Neden Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('treatments/patient-reviews')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),

                Textarea::make('why_description')
                    ->label('Neden Açıklaması')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('why_content')
                    ->label('Neden İçeriği')
                    ->required()
                    ->columnSpan(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}