<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoveStoryResource\Pages;
use App\Filament\Resources\LoveStoryResource\RelationManagers;
use App\Models\LoveStory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoveStoryResource extends Resource
{
    protected static ?string $model = LoveStory::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Undangan';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Cerita')
                    ->schema([
                        Forms\Components\Select::make('couple_id')
                            ->label('Pasangan')
                            ->relationship('couple', 'groom_name')
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->required(),
                        Forms\Components\DatePicker::make('date')
                            ->label('Tanggal')
                            ->required(),
                        Forms\Components\FileUpload::make('image_url')
                            ->label('Gambar')
                            ->image()
                            ->required(),
                        Forms\Components\FileUpload::make('thumbnail_url')
                            ->label('Thumbnail')
                            ->image()
                            ->required(),
                        Forms\Components\TextInput::make('order_number')
                            ->label('Urutan')
                            ->numeric()
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
                Tables\Columns\ImageColumn::make('thumbnail_url')
                    ->label('Thumbnail'),
                Tables\Columns\TextColumn::make('couple.groom_name')
                    ->label('Pasangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Urutan')
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
            'index' => Pages\ListLoveStories::route('/'),
            'create' => Pages\CreateLoveStory::route('/create'),
            'edit' => Pages\EditLoveStory::route('/{record}/edit'),
        ];
    }
}
