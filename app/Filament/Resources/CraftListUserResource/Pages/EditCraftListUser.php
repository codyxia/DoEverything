<?php

namespace App\Filament\Resources\CraftListUserResource\Pages;

use App\Filament\Resources\CraftListUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCraftListUser extends EditRecord
{
    protected static string $resource = CraftListUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
