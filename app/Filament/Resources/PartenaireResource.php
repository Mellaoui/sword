<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartenaireResource\Pages;
use App\Filament\Resources\PartenaireResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Models\Partenaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PartenaireResource extends Resource
{
    protected static ?string $model = Partenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Accueil';

    public static function form(Form $form): Form
    {
        return $form
                ->schema(static::getFormSchema(Forms\Components\Card::class));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('partenaire-image')
                    ->label('Image')
                    ->collection('partenaire-images'),   
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
            'index' => Pages\ListPartenaires::route('/'),
            'create' => Pages\CreatePartenaire::route('/create'),
            'edit' => Pages\EditPartenaire::route('/{record}/edit'),
        ];
    }

    public static function getFormSchema(string $layout = Forms\Components\Grid::class){

        return [
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                        ->collection('partenaire-images')
                                        ->multiple()
                                        ->maxFiles(5)
                        ])
                        ->columns(1),
                ])
        ];

    }
}
