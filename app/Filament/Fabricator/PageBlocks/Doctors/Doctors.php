<?php

namespace App\Filament\Fabricator\PageBlocks\Doctors;

use App\Models\Doctor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Doctors extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('doctors.doctors')
            ->schema([
                Select::make('sort_order')
                    ->label('Sıralama')
                    ->options([
                        'asc' => 'A-Z (İsme göre)',
                        'desc' => 'Z-A (İsme göre)',
                    ])
                    ->default('asc')
                    ->required()
                    ->native(false)
                    ->columnSpanFull(),
            ])->visible(fn ($get) => $get('../layout') == 'doctors');
    }

    public static function mutateData(array $data): array
    {
        // Sıralama tercihine göre doktorları getir
        $doctors = Doctor::orderBy('name', $data['sort_order'] ?? 'asc')->get();

        return array_merge($data, [
            'doctors' => $doctors,
        ]);
    }
}
