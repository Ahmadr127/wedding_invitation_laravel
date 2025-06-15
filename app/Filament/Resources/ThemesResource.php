<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThemesResource\Pages;
use App\Filament\Resources\ThemesResource\RelationManagers;
use App\Models\Themes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThemesResource extends Resource
{
    protected static ?string $model = Themes::class;

    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';
    protected static ?string $navigationGroup = 'Undangan';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Tema')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Tema')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(100)
                            ->unique(ignoreRecord: true),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->nullable(),
                        Forms\Components\FileUpload::make('preview_image')
                            ->label('Preview Image')
                            ->image()
                            ->required(),
                        Forms\Components\FileUpload::make('thumbnail_image')
                            ->label('Thumbnail Image')
                            ->image()
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->label('Harga')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'free' => 'Gratis',
                                'premium' => 'Premium',
                            ])
                            ->default('free')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Konfigurasi Tema')
                    ->schema([
                        Forms\Components\KeyValue::make('features')
                            ->label('Fitur')
                            ->keyLabel('Nama Fitur')
                            ->valueLabel('Status')
                            ->default([
                                'responsive' => true,
                                'music_player' => true,
                                'gallery' => true,
                                'rsvp' => true,
                                'wishes' => true,
                            ]),
                        Forms\Components\KeyValue::make('color_scheme')
                            ->label('Skema Warna')
                            ->keyLabel('Nama Warna')
                            ->valueLabel('Kode Warna')
                            ->default([
                                'primary' => '#4A5568',
                                'secondary' => '#718096',
                                'accent' => '#ED8936',
                            ]),
                        Forms\Components\KeyValue::make('font_family')
                            ->label('Font')
                            ->keyLabel('Tipe')
                            ->valueLabel('Font')
                            ->default([
                                'heading' => 'Playfair Display',
                                'body' => 'Poppins',
                            ]),
                    ]),

                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_image')
                    ->label('Thumbnail'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Tema')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'free' => 'success',
                        'premium' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),
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
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'free' => 'Gratis',
                        'premium' => 'Premium',
                    ]),
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
            'index' => Pages\ListThemes::route('/'),
            'create' => Pages\CreateThemes::route('/create'),
            'edit' => Pages\EditThemes::route('/{record}/edit'),
        ];
    }
}
