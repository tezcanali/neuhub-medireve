<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class DoctorTestimonial extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.doctor-testimonial')
            ->schema([
                Repeater::make('testimonials')
                    ->label('Doktor Görüşleri')
                    ->schema([
                        TextInput::make('doctor_name')
                        ->label('Doktor Adı')
                        ->required()
                        ->default('Dr. John Doe')
                        ->columnSpan(3),

                        TextInput::make('doctor_title')
                            ->label('Doktor Ünvanı')
                            ->required()
                            ->default('Trichologist')
                            ->columnSpan(3),

                        FileUpload::make('doctor_image')
                            ->label('Doktor Görseli')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('about/doctor-testimonial')
                            ->optimize('webp')
                            ->deletable(true)
                            ->acceptedFileTypes(['image/*'])
                            ->columnSpan(6),

                        Textarea::make('content')
                            ->label('Görüş İçeriği')
                            ->required()
                            ->default('With our extensive experience and expertise in hair transplantation, we offer reliable and successful outcomes for our patients...')
                            ->columnSpan(6),
                    ])
                    ->defaultItems(2)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn (array $state): ?string => $state['doctor_name'] ?? null)
                    ->columns(6),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'about');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
