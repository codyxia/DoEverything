<?php

namespace App\Filament\Resources\CraftListUserResource\Pages;

use App\Filament\Resources\CraftListUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCraftListUsers extends ListRecords
{
    protected static string $resource = CraftListUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
