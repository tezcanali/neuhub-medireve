<?php

namespace App\Filament\Fabricator\PageBlocks\About;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class MissionTabs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about.mission-tabs')
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('mission')
                            ->label('Misyonumuz')
                            ->schema([
                                FileUpload::make('mission_image')
                                    ->label('Misyon Görseli')
                                    ->image()
                                    ->required()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('about/mission-tabs')
                                    ->optimize('webp')
                                    ->columnSpan(6),

                                RichEditor::make('mission_content')
                                    ->label('Misyon İçeriği')
                                    ->required()
                                    ->columnSpan(6),
                            ]),

                        Tabs\Tab::make('vision')
                            ->label('Vizyonumuz')
                            ->schema([
                                FileUpload::make('vision_image')
                                    ->label('Vizyon Görseli')
                                    ->image()
                                    ->required()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('about/mission-tabs')
                                    ->optimize('webp')
                                    ->columnSpan(6),

                                RichEditor::make('vision_content')
                                    ->label('Vizyon İçeriği')
                                    ->required()
                                    ->columnSpan(6),
                            ]),

                        Tabs\Tab::make('values')
                            ->label('Değerlerimiz')
                            ->schema([
                                FileUpload::make('values_image')
                                    ->label('Değerler Görseli')
                                    ->image()
                                    ->required()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('about/mission-tabs')
                                    ->optimize('webp')
                                    ->columnSpan(6),

                                RichEditor::make('values_content')
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
