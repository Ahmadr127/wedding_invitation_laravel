<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnalyticsResource\Pages;
use App\Filament\Resources\AnalyticsResource\RelationManagers;
use App\Models\Analytics;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnalyticsResource extends Resource
{
    protected static ?string $model = Analytics::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Statistik';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Statistik')
                    ->schema([
                        Forms\Components\Select::make('couple_id')
                            ->label('Pasangan')
                            ->relationship('couple', 'groom_name')
                            ->required(),
                        Forms\Components\TextInput::make('page_views')
                            ->label('Jumlah Pengunjung')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Forms\Components\TextInput::make('unique_visitors')
                            ->label('Pengunjung Unik')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Forms\Components\TextInput::make('rsvp_count')
                            ->label('Jumlah RSVP')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Forms\Components\TextInput::make('wishes_count')
                            ->label('Jumlah Ucapan')
                            ->numeric()
                            ->default(0)
                            ->required(),
                        Forms\Components\DateTimePicker::make('last_updated')
                            ->label('Terakhir Diperbarui')
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('couple.groom_name')
                    ->label('Pasangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('page_views')
                    ->label('Pengunjung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('unique_visitors')
                    ->label('Pengunjung Unik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rsvp_count')
                    ->label('RSVP')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('wishes_count')
                    ->label('Ucapan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_updated')
                    ->label('Terakhir Diperbarui')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('couple')
                    ->relationship('couple', 'groom_name'),
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
            'index' => Pages\ListAnalytics::route('/'),
            'create' => Pages\CreateAnalytics::route('/create'),
            'edit' => Pages\EditAnalytics::route('/{record}/edit'),
        ];
    }
}
