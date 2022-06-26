<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PourquoinousChoisirResource\Pages;
use App\Filament\Resources\PourquoinousChoisirResource\RelationManagers;
use App\Models\PourquoinousChoisir;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PourquoinousChoisirResource extends Resource
{
    protected static ?string $model = PourquoinousChoisir::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Accueil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reasons')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reasons'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPourquoinousChoisirs::route('/'),
            'create' => Pages\CreatePourquoinousChoisir::route('/create'),
            'edit' => Pages\EditPourquoinousChoisir::route('/{record}/edit'),
        ];
    }
}
