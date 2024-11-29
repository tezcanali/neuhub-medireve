<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Filament\Resources\LeadResource\RelationManagers;
use App\Models\Lead;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Lead Yönetimi';

    protected static ?string $label = 'Form Talepleri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label(__('table.labels.form-type')),
                TextColumn::make('name')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->where('name', 'like', "%{$search}%");
                    })
                    ->label(__('table.labels.name')),
                TextColumn::make('email')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->where('email', 'like', "%{$search}%");
                    })
                    ->icon('heroicon-m-envelope')
                    ->copyable()
                    ->copyMessage('E-posta Adresi Kopyalandı')
                    ->copyMessageDuration(1500)
                    ->label(__('table.labels.email')),
                TextColumn::make('phone')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->where('phone', 'like', "%{$search}%");
                    })
                    ->icon('heroicon-o-phone-arrow-down-left')
                    ->copyable()
                    ->copyMessage('Telefon Numarası Kopyalandı')
                    ->copyMessageDuration(1500)
                    ->label(__('table.labels.phone')),
                TextColumn::make('created_at')
                    ->label(__('table.labels.created_at')),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListLeads::route('/'),
            'view' => Pages\ViewLead::route('/{record}'),
        ];
    }
}
