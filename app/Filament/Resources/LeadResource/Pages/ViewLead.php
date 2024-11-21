<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Filament\Resources\LeadResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Split;
use Filament\Support\Enums\IconPosition;

class ViewLead extends ViewRecord
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Split::make([
                    Section::make()
                        ->id('main')
                        ->schema([
                            TextEntry::make('name')
                                ->label('Ad Soyad'),
                            TextEntry::make('email')
                                ->copyable()
                                ->icon('heroicon-o-document-duplicate')
                                ->iconPosition(IconPosition::After)
                                ->label('E-Posta'),
                            TextEntry::make('phone')
                                ->copyable()
                                ->icon('heroicon-o-document-duplicate')
                                ->iconPosition(IconPosition::After)
                                ->label('Telefon'),
                            TextEntry::make('additional.service')
                                ->label('Hizmet'),
                            TextEntry::make('additional.country')
                                ->label('Ülke'),
                            TextEntry::make('additional.message')
                                ->label('Mesaj'),
                        ]),
                    Section::make()
                        ->id('info')
                        ->schema([
                            TextEntry::make('type')
                                ->label('Form Türü'),
                            TextEntry::make('created_at')
                                ->label('Oluşturulma Tarihi')
                                ->dateTime('H:i d F Y'),
                            TextEntry::make('additional.url')
                                ->label('URL'),
                        ])->grow(false)
                ])->columnSpanFull(),
            ]);
    }
}
