<?php

namespace App\Filament\Admin\Resources\TokoHandphoneResource\Pages;

use App\Filament\Admin\Resources\TokoHandphoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTokoHandphone extends EditRecord
{
    protected static string $resource = TokoHandphoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
