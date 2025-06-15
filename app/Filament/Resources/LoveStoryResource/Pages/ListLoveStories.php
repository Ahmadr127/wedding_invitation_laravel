<?php

namespace App\Filament\Resources\LoveStoryResource\Pages;

use App\Filament\Resources\LoveStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoveStories extends ListRecords
{
    protected static string $resource = LoveStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
