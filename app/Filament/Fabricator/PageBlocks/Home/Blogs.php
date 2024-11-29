<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use App\Models\Blog;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Blogs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.blogs')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->default('Blog')
                    ->required(),

                Select::make('sort_by')
                    ->label('Sıralama')
                    ->options([
                        'desc' => 'Yeniden Eskiye',
                        'asc' => 'Eskiden Yeniye',
                    ])
                    ->default('desc')
                    ->required(),

                Select::make('status')
                    ->label('Durum')
                    ->options([
                        'all' => 'Tümü',
                        'published' => 'Yayında',
                        'draft' => 'Taslak'
                    ])
                    ->default('published')
                    ->required(),

                TextInput::make('limit')
                    ->label('Gösterilecek Blog Sayısı')
                    ->numeric()
                    ->default(4)
                    ->required(),
            ])
            ->columns(12);
    }

    public static function mutateData(array $data): array
    {
        // Blog verilerini çek
        $query = Blog::query();

        // Durum filtresi
        if ($data['status'] !== 'all') {
            $query->where('status', $data['status']);
        }

        // Sıralama
        $query->orderBy('created_at', $data['sort_by']);

        // Limit
        $query->limit($data['limit']);

        // Blogları çek
        $data['blogs'] = $query->get();

        return $data;
    }
}