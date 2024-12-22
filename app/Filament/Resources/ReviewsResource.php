<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Reviews;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReviewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReviewsResource\RelationManagers;

class ReviewsResource extends Resource
{
    protected static ?string $model = Reviews::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('tourist_spot_id')
                ->relationship('touristSpot', 'name')
                ->label('Tourist Spot Id')
                ->required(),
                TextInput::make('reviewer_name')
                ->label('Review Name')
                ->maxLength(30),
                TextInput::make('rating')
                ->label('Rating')
                ->maxLength(30),
                Textarea::make('review_text')
                ->label('Review Text')
                ->maxLength(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
            TextColumn::make('reviewer_name')
                ->label('Reviewer Name') 
                ->sortable()
                ->searchable()
                ->limit(30), 
                
            TextColumn::make('rating')
                ->label('Rating') 
                ->sortable()
                ->searchable(),
                
            TextColumn::make('review_text')
                ->label('Review Text') 
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReviews::route('/create'),
            'view' => Pages\ViewReviews::route('/{record}'),
            'edit' => Pages\EditReviews::route('/{record}/edit'),
        ];
    }
}
