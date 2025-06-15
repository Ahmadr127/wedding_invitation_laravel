<?php

namespace App\Filament\Resources\VisitorLogsResource\Pages;

use App\Filament\Resources\VisitorLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorLogs extends ListRecords
{
    protected static string $resource = VisitorLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
