<?php

namespace App\Filament\Resources\LocationsResource\Pages;

use App\Filament\Resources\LocationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLocations extends ViewRecord
{
    protected static string $resource = LocationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
