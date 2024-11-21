<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'İçerik';

    protected static ?string $label = 'Team';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('İçerik')
                            ->schema([
                                TextInput::make('name')
                                    ->label('İsim')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('job_title')
                                    ->label('Ünvan')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                RichEditor::make('content')
                                    ->label('Özgeçmiş')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ]),
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6,
                            ]),
                        Tabs\Tab::make('Bilgiler')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Görsel')
                                    ->image()
                                    ->required()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('doctors')
                                    ->acceptedFileTypes([
                                        'image/*'
                                    ])
                                    ->columnSpan([
                                        'sm' => 3,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ]),
                                RichEditor::make('associations')
                                    ->label('Dernekler & Üyelikler')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                RichEditor::make('publications')
                                    ->label('Yayınlar')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                            ])
                            ->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6,
                            ]),
                        Tabs\Tab::make('Sosyal Medya')
                            ->schema([
                                Repeater::make('social')
                                    ->schema([
                                        Select::make('platform')
                                            ->options([
                                                'fa-facebook-f' => 'Facebook',
                                                'fa-linkedin-in' => 'Linkedin',
                                                'fa-instagram' => 'Instagram',
                                                'fa-youtube' => 'Youtube',
                                                'fa-tiktok' => 'Tiktok',
                                                'fa-x-twitter' => 'Twitter'
                                            ])
                                            ->native(false)
                                            ->required(),
                                        TextInput::make('url')->required(),
                                    ])
                                    ->cloneable()
                                    ->collapsed()
                                    ->label('Sosyal Mecralar')
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
                ImageColumn::make('image')
                    ->size(50)
                    ->label(__('table.labels.image')),
                TextColumn::make('name')
                    ->label(__('table.labels.name')),
                TextColumn::make('job_title')
                    ->label(__('table.labels.jobTitle')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('visit')
                    ->label(__('filament-fabricator::page-resource.actions.visit'))
                    ->url(fn ($record) => url('/teams/' . $record->slug))
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
