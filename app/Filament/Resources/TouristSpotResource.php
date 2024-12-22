<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TouristSpot;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TouristSpotResource\Pages;
use App\Filament\Resources\TouristSpotResource\RelationManagers;

class TouristSpotResource extends Resource
{
    protected static ?string $model = TouristSpot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
               ->label('Category')
               ->maxLength(20),
               TextInput::make('category_id')
               ->label('Category Id')
               ->maxLength(20),
               TextInput::make('location_id')
               ->label('Location')
               ->maxLength(20),
               Textarea::make('description')
                ->label('Description')
                ->maxLength(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Category') 
                ->sortable()
                ->searchable()
                ->limit(20), 

            TextColumn::make('category_id')
                ->label('Category ID') 
                ->sortable()
                ->searchable()
                ->limit(20), 

            TextColumn::make('location_id')
                ->label('Location ID') 
                ->sortable()
                ->searchable()
                ->limit(20), 

            TextColumn::make('description')
                ->label('Description') 
                ->limit(30), 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTouristSpots::route('/'),
            'create' => Pages\CreateTouristSpot::route('/create'),
            'view' => Pages\ViewTouristSpot::route('/{record}'),
            'edit' => Pages\EditTouristSpot::route('/{record}/edit'),
        ];
    }
}
