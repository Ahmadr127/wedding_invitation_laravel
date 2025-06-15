<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Filament\Resources\EventsResource\RelationManagers;
use App\Models\Events;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Undangan';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Acara')
                    ->schema([
                        Forms\Components\Select::make('couple_id')
                            ->label('Pasangan')
                            ->relationship('couple', 'groom_name')
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Acara')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->nullable(),
                        Forms\Components\DatePicker::make('event_date')
                            ->label('Tanggal Acara')
                            ->required(),
                        Forms\Components\TimePicker::make('event_time')
                            ->label('Waktu Acara')
                            ->required(),
                        Forms\Components\TextInput::make('location')
                            ->label('Lokasi')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('google_maps_url')
                            ->label('URL Google Maps')
                            ->url(),
                        Forms\Components\Textarea::make('google_maps_embed')
                            ->label('Embed Google Maps')
                            ->rows(3),
                        Forms\Components\TextInput::make('dress_code')
                            ->label('Dress Code')
                            ->maxLength(100),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),
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
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Acara')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_time')
                    ->label('Waktu')
                    ->time(),
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('couple')
                    ->relationship('couple', 'groom_name'),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}
