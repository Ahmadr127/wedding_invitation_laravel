<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CouplesResource\Pages;
use App\Filament\Resources\CouplesResource\RelationManagers;
use App\Models\Couples;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CouplesResource extends Resource
{
    protected static ?string $model = Couples::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationGroup = 'Undangan';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Pasangan')
                    ->schema([
                        Forms\Components\Select::make('theme_id')
                            ->label('Tema')
                            ->relationship('theme', 'name')
                            ->required(),
                        Forms\Components\Select::make('user_id')
                            ->label('Admin')
                            ->relationship('user', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('groom_name')
                            ->label('Nama Mempelai Pria')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('bride_name')
                            ->label('Nama Mempelai Wanita')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('groom_nickname')
                            ->label('Nama Panggilan Pria')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('bride_nickname')
                            ->label('Nama Panggilan Wanita')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('groom_instagram')
                            ->label('Instagram Pria')
                            ->maxLength(50),
                        Forms\Components\TextInput::make('bride_instagram')
                            ->label('Instagram Wanita')
                            ->maxLength(50),
                    ])->columns(2),

                Forms\Components\Section::make('Informasi Acara')
                    ->schema([
                        Forms\Components\DatePicker::make('wedding_date')
                            ->label('Tanggal Pernikahan')
                            ->required(),
                        Forms\Components\TimePicker::make('wedding_time')
                            ->label('Waktu Pernikahan')
                            ->required(),
                        Forms\Components\TextInput::make('venue_name')
                            ->label('Nama Venue')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('venue_address')
                            ->label('Alamat Venue')
                            ->required(),
                        Forms\Components\TextInput::make('google_maps_url')
                            ->label('URL Google Maps')
                            ->url(),
                        Forms\Components\Textarea::make('google_maps_embed')
                            ->label('Embed Google Maps')
                            ->rows(3),
                    ])->columns(2),

                Forms\Components\Section::make('Pengaturan')
                    ->schema([
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(100)
                            ->unique(ignoreRecord: true),
                        Forms\Components\FileUpload::make('cover_image')
                            ->label('Cover Image')
                            ->image()
                            ->required(),
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
                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Cover'),
                Tables\Columns\TextColumn::make('groom_name')
                    ->label('Mempelai Pria')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bride_name')
                    ->label('Mempelai Wanita')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wedding_date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('venue_name')
                    ->label('Venue')
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
                Tables\Filters\SelectFilter::make('theme')
                    ->relationship('theme', 'name'),
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
            'index' => Pages\ListCouples::route('/'),
            'create' => Pages\CreateCouples::route('/create'),
            'edit' => Pages\EditCouples::route('/{record}/edit'),
        ];
    }
}
