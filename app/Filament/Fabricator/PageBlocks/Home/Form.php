<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Form extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.form')
            ->schema([
                Tabs::make('Form Ayarları')
                    ->tabs([
                        // Üst Bölüm Tab'i
                        Tabs\Tab::make('header')
                            ->label('Üst Bölüm')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->default('Find out if you are suitable for a hair transplant with our Clinic!')
                                    ->required(),
                                    
                                FileUpload::make('image')
                                    ->label('Görsel')
                                    ->image()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('form-images'),
                                    
                                TextInput::make('contact_text')
                                    ->label('İletişim Metni')
                                    ->default('Get a FREE hair analysis in 24h from our Medical Expert'),
                            ]),

                        // Form Ayarları Tab'i    
                        Tabs\Tab::make('form')
                            ->label('Form Ayarları')
                            ->schema([
                                Repeater::make('services')
                                    ->label('Hizmetler')
                                    ->schema([
                                        TextInput::make('name')
                                            ->label('Hizmet Adı')
                                            ->required(),
                                    ])
                                    ->defaultItems(3)
                                    ->collapsible(),
                                    
                                TextInput::make('recaptcha_key')
                                    ->label('reCAPTCHA Site Key')
                                    ->default('6Ley1WgqAAAAAEcd7Qk_2gtnzuxjNvp-hD6a4rqR'),
                            ]),

                        // Alt Bölüm Tab'i
                        Tabs\Tab::make('footer')
                            ->label('Alt Bölüm')
                            ->schema([
                                TextInput::make('footer_title')
                                    ->label('Alt Başlık')
                                    ->default('Book Your Free Consultation'),
                                    
                                Textarea::make('footer_description')
                                    ->label('Alt Açıklama')
                                    ->default('Book your free consultation today and take the first step towards restoring your hair and confidence.'),
                                    
                                FileUpload::make('footer_image')
                                    ->label('Alt Görsel')
                                    ->image()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('form-images'),
                                    
                                TextInput::make('footer_link')
                                    ->label('Alt Bölüm Link')
                                    ->default('/contact'),
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