<?php

namespace App\Filament\Admin\Resources\MotivasiResource\Pages;

use App\Filament\Admin\Resources\MotivasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMotivasi extends EditRecord
{
    protected static string $resource = MotivasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
