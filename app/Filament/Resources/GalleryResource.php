<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\BlogCategory;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'İçerik';

    protected static ?string $label = 'Galeri';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Body')
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->label('Öne Çıkan Görsel')
                                    ->image()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('galleries')
                                    ->acceptedFileTypes([
                                        'image/*'
                                    ])
                                    ->columnSpan([
                                        'sm' => 3,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ]),
                                Select::make('category_id')
                                    ->relationship('category', 'title')
                                    ->options(GalleryCategory::all()->pluck('title', 'id'))
                                    ->required()
                                    ->label('Kategori')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->native(false),
                                Select::make('status')
                                    ->options([
                                        'published' => 'Published',
                                        'draft' => 'Draft'
                                    ])
                                    ->label('Durum')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->native(false),
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 3,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ]),
                                Repeater::make('images')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->required()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('galleries')
                                            ->acceptedFileTypes([
                                                'image/*'
                                            ])
                                            ->columnSpan([
                                                'sm' => 3,
                                                'xl' => 6,
                                                '2xl' => 12,
                                            ]),
                                    ])
                                    ->label('Görseller')
                                    ->cloneable()
                                    ->collapsed()
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ]),
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6,
                            ]),
                        Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make(),
                            ]),
                    ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('table.labels.title')),
                TextColumn::make('category.title')
                    ->label('Galeri Türü'),
                TextColumn::make('status')
                    ->label(__('table.labels.status'))
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('visit')
                    ->label(__('filament-fabricator::page-resource.actions.visit'))
                    ->url(fn ($record) =>
                    $record->category->type === 'BeforeAfter'
                        ? url('/before-after/' . $record->slug)
                        : ($record->category->type === 'Gallery'
                        ? url('/gallery/' . $record->slug)
                        : null
                    )
                    )
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->openUrlInNewTab()
                    ->color('success'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
