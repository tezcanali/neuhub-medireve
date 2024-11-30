<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PageHeader2 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.page-header2')
            ->schema([
                Tabs::make('Header Ayarları')
                    ->tabs([
                        Tabs\Tab::make('Üst Banner')
                            ->schema([
                                TextInput::make('banner_text')
                                    ->label('Banner Metni')
                                    ->default('Recognized Leader in Hair Transplants')
                                    ->required(),

                                TextInput::make('banner_subtext')
                                    ->label('Banner Alt Metni')
                                    ->default('Your Trusted Choice')
                                    ->required(),
                            ]),

                        Tabs\Tab::make('Başlık')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->required(),

                                TextInput::make('title_colored')
                                    ->label('Renkli Başlık')
                                    ->required(),

                                TextInput::make('description')
                                    ->label('Açıklama'),
                            ]),

                        Tabs\Tab::make('Breadcrumb')
                            ->schema([
                                Repeater::make('breadcrumbs')
                                    ->label('Breadcrumbs')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ->required(),

                                        TextInput::make('link')
                                            ->label('Link')
                                            ->nullable(),
                                    ])
                                    ->defaultItems(2)
                                    ->reorderableWithButtons()
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
                            ]),
                    ])
                    ->columnSpanFull()
            ])
            ->columns(12);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
