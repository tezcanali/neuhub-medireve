<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hospitals extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.hospitals')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required(),

                Repeater::make('hospitals')
                    ->label('Hastaneler')
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('home/hospital-logos')
                            ->optimize('webp')
                            ->columnSpanFull(),

                        TextInput::make('name')
                            ->label('Hastane Adı')
                            ->required(),

                        TextInput::make('link')
                            ->label('Link')
                            ->url()
                            ->prefix('https://')
                            ->nullable(),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->reorderableWithButtons(),
            ])->visible(fn ($get) => $get('../layout') == 'home');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
