<?php

namespace App\Filament\Resources\GiftsResource\Pages;

use App\Filament\Resources\GiftsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGifts extends EditRecord
{
    protected static string $resource = GiftsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
