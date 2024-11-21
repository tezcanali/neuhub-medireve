<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use App\Models\Doctor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Illuminate\Support\Facades\Schema;

class Approved extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.approved')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->default('Approved By')
                    ->required()
                    ->columnSpan(2),
                Select::make('doctors')
                    ->label('Doktorlar')
                    ->multiple()
                    ->options(
                    // Tablo var mı kontrol et, yoksa boş array döndür
                        Schema::hasTable('doctors')
                            ? Doctor::all()->pluck('name', 'id')
                            : []
                    )
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpanFull()
            ])->visible(fn ($get) => $get('../layout') == 'treatment');
    }

    public static function mutateData(array $data): array
    {
        // Önce tablo var mı kontrol et
        if (!Schema::hasTable('doctors')) {
            return $data;
        }

        $data['doctors'] = Doctor::whereIn('id', $data['doctors'])
            ->get()
            ->map(function ($doctor) {
                return [
                    'image' => $doctor->image ?? null,
                    'name' => $doctor->name ?? 'İsimsiz Doktor',
                    'title' => $doctor->job_title ?? '-',
                    'experience' => $doctor->experience ?? '-',
                    'education' => $doctor->education ?? '-',
                    'email' => $doctor->email ?? '-',
                    'link' => $doctor->slug ? url('/doctors/' . $doctor->slug) : '#',
                ];
            })
            ->toArray();

        return $data;
    }
}
