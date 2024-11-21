<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use App\Models\Doctor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Doctors extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.doctors')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->default('Doctors')
                    ->required()
                    ->columnSpan(2),
                Select::make('doctors')
                    ->label('Doktorlar')
                    ->multiple()
                    ->options(Doctor::all()->pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        $data['doctors'] = Doctor::whereIn('id', $data['doctors'])
            ->get()
            ->map(function ($doctor) {
                return [
                    'image' => $doctor->image,
                    'name' => $doctor->name,
                    'title' => $doctor->job_title,
                    'education' => $doctor->education ?? '-',
                    'link' => url('/doctors/' . $doctor->slug),
                ];
            })
            ->toArray();

        return $data;
    }
}