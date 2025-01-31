<?php

namespace App\Filament\Admin\Resources\MotivasiResource\Pages;

use App\Filament\Admin\Resources\MotivasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMotivasis extends ListRecords
{
    protected static string $resource = MotivasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
