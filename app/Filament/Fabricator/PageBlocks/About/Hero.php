<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.hero')
            ->schema([
                TextInput::make('alert_text')
                    ->label('Üst Banner Metni')
                    ->default('Recognized Leader in Hair Transplants')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('award_text')
                    ->label('Ödül Metni')
                    ->default('Aesthetics Medicine Awards')
                    ->required()
                    ->columnSpan(3),

                Repeater::make('breadcrumbs')
                    ->label('Breadcrumb Menü')
                    ->schema([
                        TextInput::make('text')
                            ->label('Menü Metni')
                            ->required()
                            ->columnSpan(3),
                            
                        TextInput::make('link')
                            ->label('Menü Linki')
                            ->default('#')
                            ->required()
                            ->columnSpan(3),
                    ])
                    ->defaultItems(2)
                    ->collapsible()
                    ->collapsed()
                    ->reorderableWithButtons()
                    ->itemLabel(fn (array $state): ?string => $state['text'] ?? null)
                    ->columns(6)
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->label('Ana Başlık')
                    ->default('Who We Are')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('content_first')
                    ->label('İlk Paragraf')
                    ->default('Medireve is a premier health tourism company...')
                    ->required()
                    ->rows(4)
                    ->columnSpan(6),

                Textarea::make('content_second')
                    ->label('İkinci Paragraf')
                    ->default('Working in partnership with some of the most respected...')
                    ->required()
                    ->rows(4)
                    ->columnSpan(6),

                FileUpload::make('hero_image')
                    ->label('Sağ Görsel')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('about/hero')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),
            ])
            ->columns(6);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}