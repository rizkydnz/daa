<?php

namespace App\Filament\Admin\Resources\TokoHandphoneResource\Pages;

use App\Filament\Admin\Resources\TokoHandphoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTokoHandphones extends ListRecords
{
    protected static string $resource = TokoHandphoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
