<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Founder extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.founder')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('main_content')
                    ->label('Ana İçerik')
                    ->required()
                    ->columnSpan(6),

                Textarea::make('sub_content')
                    ->label('Alt İçerik')
                    ->required()
                    ->columnSpan(6),

                FileUpload::make('about_image')
                    ->label('Hakkımızda Görseli')
                    ->image()
                    ->required()
                    ->maxSize(150000)
                    ->disk('public')
                    ->directory('about/founder')
                    ->optimize('webp')
                    ->deletable(true)
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpan(6),

                TextInput::make('video_title')
                    ->label('Video Başlığı')
                    ->required()
                    ->columnSpan(3),

                TextInput::make('video_subtitle')
                    ->label('Video Alt Başlığı')
                    ->required()
                    ->columnSpan(3),

                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('mission')
                            ->label('Misyonumuz')
                            ->schema([
                                TextInput::make('mission_tab_title')
                                    ->label('Misyon Sekmesi Başlığı')
                                    ->default('Our Mission')
                                    ->required()
                                    ->columnSpan(6),
                                Textarea::make('mission_content')
                                    ->label('Misyon İçeriği')
                                    ->required()
                                    ->columnSpan(6),
                            ]),
                        Tabs\Tab::make('vision')
                            ->label('Vizyonumuz')
                            ->schema([
                                TextInput::make('vision_tab_title')
                                    ->label('Vizyon Sekmesi Başlığı')
                                    ->required()
                                    ->columnSpan(6),
                                Textarea::make('vision_content')
                                    ->label('Vizyon İçeriği')
                                    ->required()
                                    ->columnSpan(6),
                            ]),
                        Tabs\Tab::make('values')
                            ->label('Değerlerimiz')
                            ->schema([
                                TextInput::make('values_tab_title')
                                    ->label('Değerler Sekmesi Başlığı')
                                    ->required()
                                    ->columnSpan(6),
                                Textarea::make('values_content')
                                    ->label('Değerler İçeriği')
                                    ->required()
                                    ->columnSpan(6),
                            ]),
                    ])
                    ->columnSpanFull(),
            ])
            ->columns(6)->visible(fn ($get) => $get('../layout') == 'about');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
