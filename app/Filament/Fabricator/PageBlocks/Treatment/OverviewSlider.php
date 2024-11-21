<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class OverviewSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.overview-slider')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->default('Hair Transplant Techniques Overview')
                    ->required()
                    ->columnSpan(3),

                Textarea::make('description')
                    ->label('Açıklama')
                    ->default('There are different hair transplant techniques to meet the different needs and preferences of the patients. Female hair transplant has the same technique options as male hair transplant. Hair transplant Turkey with Medireve offers all the advanced techniques for its patients!')
                    ->required()
                    ->columnSpan(3),

                Repeater::make('slides')
                    ->label('Slaytlar')
                    ->schema([
                        FileUpload::make('slide_image')
                            ->label('Slayt Görseli')
                            ->image()
                            ->required()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('treatments/overview-slider')
                            ->optimize('webp')
                            ->deletable(true)
                            ->acceptedFileTypes(['image/*'])
                            ->columnSpan(6),

                        TextInput::make('slide_title')
                            ->label('Slayt Başlığı')
                            ->required()
                            ->columnSpan(6),

                        Textarea::make('slide_content')
                            ->label('Slayt İçeriği')
                            ->required()
                            ->columnSpan(6),

                        TextInput::make('button_text')
                            ->label('Buton Metni')
                            ->default('Make An Application *')
                            ->required()
                            ->columnSpan(3),

                        TextInput::make('button_link')
                            ->label('Buton Linki')
                            ->default('#')
                            ->required()
                            ->columnSpan(3),
                    ])
                    ->defaultItems(3)
                    ->columnSpanFull()
                    ->collapsible()
                    ->collapsed()
                    ->itemLabel(fn (array $state): ?string => $state['slide_title'] ?? null)
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}