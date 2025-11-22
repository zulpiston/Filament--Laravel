<?php

namespace App\Filament\Resources\Galerias\Pages;

use App\Filament\Resources\Galerias\GaleriaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGaleria extends ViewRecord
{
    protected static string $resource = GaleriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
