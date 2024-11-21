<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryCategoryResource\Pages;
use App\Filament\Resources\GalleryCategoryResource\RelationManagers;
use App\Models\GalleryCategory;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class GalleryCategoryResource extends Resource
{
    protected static ?string $model = GalleryCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Galeri Kategori';

    protected static ?string $navigationParentItem = 'Galeri';


    protected static ?string $label = 'Galeri Kategori';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Info')
                            ->schema([
                                TextInput::make('title')->required()->label('Başlık'),
                                Select::make('type')
                                    ->options([
                                        'BeforeAfter' => 'Before & After',
                                        'Gallery' => 'Gallery',
                                    ])->label('Galeri Türü')
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
                Tables\Columns\TextColumn::make('title')->label('Başlık'),
                Tables\Columns\TextColumn::make('type')->label('Galeri Türü'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ManageGalleryCategories::route('/'),
        ];
    }
}
