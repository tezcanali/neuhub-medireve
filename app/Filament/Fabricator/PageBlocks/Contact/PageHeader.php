<?php

namespace App\Filament\Fabricator\PageBlocks\Contact;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PageHeader extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('contact.page-header')
            ->schema([
                TextInput::make('form_title')
                ->label('Form Başlık')
                    ->required()
                    ->columnSpan(6),
                Textarea::make('form_desc')
                    ->label('Form Açıklama')
                    ->required()
                    ->columnSpan(6),
                Repeater::make('address')
                ->label('Adresler')
                ->schema([
                    TextInput::make('title')
                        ->required()
                    ->label('Adres Başlık'),
                    TextInput::make('address')
                        ->required()
                        ->label('Adres'),
                ])->columnSpan(6),
                TextInput::make('callbtn_title')
                    ->label('Arama Buton Başlık')
                ->columnSpan(3),
                TextInput::make('callbtn_number')
                    ->label('Arama Buton Telefon')
                    ->columnSpan(3),
                TextInput::make('wp_title')
                    ->label('WP Buton Başlık')
                    ->columnSpan(3),
                TextInput::make('wp_number')
                    ->label('WP Buton Telefon')
                    ->columnSpan(3),
            ])->columns(6);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
