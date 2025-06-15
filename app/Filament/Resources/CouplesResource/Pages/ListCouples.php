<?php

namespace App\Filament\Resources\CouplesResource\Pages;

use App\Filament\Resources\CouplesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCouples extends ListRecords
{
    protected static string $resource = CouplesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
