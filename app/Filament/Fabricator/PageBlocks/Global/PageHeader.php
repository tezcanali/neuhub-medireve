<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PageHeader extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.page-header')
            ->schema([
                Tabs::make('Sayfa Başlığı')
                    ->tabs([
                        // Üst Banner Tab'i
                        Tabs\Tab::make('banner')
                            ->label('Üst Banner')
                            ->schema([
                                TextInput::make('alert_text')
                                    ->label('Banner Metni')
                                    ->columnSpan(3),

                                TextInput::make('award_text')
                                    ->label('Ödül Metni')
                                    ->columnSpan(3),
                            ])
                            ->columns(6),

                        // Breadcrumbs Tab'i
                        Tabs\Tab::make('breadcrumbs')
                            ->label('Breadcrumb Menü')
                            ->schema([
                                Repeater::make('breadcrumbs')
                                    ->label('Menü Öğeleri')
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
                                    ->reorderableWithButtons()
                                    ->itemLabel(fn(array $state): ?string => $state['text'] ?? null)
                                    ->columns(6)
                                    ->columnSpanFull(),
                            ])
                            ->columns(6),

                        // İçerik Tab'i
                        Tabs\Tab::make('content')
                            ->label('İçerik')
                            ->schema([
                                TextInput::make('subtitle')
                                    ->label('Üst Başlık')
                                    ->columnSpan(6),

                                TextInput::make('title')
                                    ->label('Ana Başlık')
                                    ->columnSpan(6),

                                TextInput::make('colored_title')
                                    ->label('Renkli Başlık')
                                    ->columnSpan(6),

                                Textarea::make('description')
                                    ->label('Açıklama')
                                    ->rows(4)
                                    ->columnSpan(6),
                            ])
                            ->columns(6),

                        // Görsel Tab'i
                        Tabs\Tab::make('image')
                            ->label('Görsel')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Sağ Görsel')
                                    ->image()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('page-headers')
                                    ->optimize('webp')
                                    ->columnSpan(6),

                                TextInput::make('image_title')
                                    ->label('Görsel Başlığı')
                                    ->columnSpan(3),

                                TextInput::make('image_subtitle')
                                    ->label('Görsel Alt Başlığı')
                                    ->columnSpan(3),
                            ])
                            ->columns(6),
                    ])
                    ->columnSpanFull()
            ])
            ->columns(6)->visible(fn ($get) => in_array($get('../layout'), ['blogs', 'before-after']));
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
