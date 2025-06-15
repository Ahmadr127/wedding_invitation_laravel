<?php

namespace App\Filament\Resources\VisitorLogsResource\Pages;

use App\Filament\Resources\VisitorLogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisitorLogs extends EditRecord
{
    protected static string $resource = VisitorLogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
