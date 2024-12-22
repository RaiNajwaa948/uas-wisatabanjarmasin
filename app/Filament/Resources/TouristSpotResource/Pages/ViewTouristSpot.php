<?php

namespace App\Filament\Resources\TouristSpotResource\Pages;

use App\Filament\Resources\TouristSpotResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTouristSpot extends ViewRecord
{
    protected static string $resource = TouristSpotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
