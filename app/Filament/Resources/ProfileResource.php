<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('nim')
            ->label('NIM')
            ->required()
            ->maxLength(255),

            TextInput::make('nama')
            ->label('Name')
            ->required()
            ->maxLength(255),

            TextInput::make('email')
            ->label('Email')
            ->required()
            ->maxLength(255),

            FileUpload::make('photo')
            ->label('Profile Photo')
            ->image()
            ->directory('profils'),

            TextInput::make('kelas')
            ->label('Kelas')
            ->required()
            ->maxLength(255),

            TextInput::make('github')
            ->label('GitHub')
            ->required()
            ->maxLength(255),

            Textarea::make('bio')
            ->label('Bio')
            ->maxLength(500),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nim')
            ->label('NIM'),

            TextColumn::make('nama')
            ->label('Nama')
            ->sortable()
            ->searchable(),

            TextColumn::make('email')
            ->label('Email'),

            ImageColumn::make('photo')
            ->label('Profile Photo')
            // ->getStateUsing(fn ($record) => $record->photo ? asset('storage/uploads/profiles/' . $record->photo) : null)
            ->width(50)
            ->height(50),

            TextColumn::make('kelas')
            ->label('Kelas'),
            
            TextColumn::make('github')
            ->label('GitHub'),

            TextColumn::make('bio')
            ->label('Bio')
            ->limit(50), 
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
