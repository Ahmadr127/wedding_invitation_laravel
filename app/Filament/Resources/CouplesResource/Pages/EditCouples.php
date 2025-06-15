<?php

namespace App\Filament\Resources\CouplesResource\Pages;

use App\Filament\Resources\CouplesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCouples extends EditRecord
{
    protected static string $resource = CouplesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
