<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PresentationResource\Pages;
use App\Filament\Resources\PresentationResource\RelationManagers;
use App\Models\Presentation;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PresentationResource extends Resource
{
    protected static ?string $model = Presentation::class;
    protected static ?int $navigationSort = -4;

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
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('presentation-image')
                ->label('Image')
                ->collection('presentation-images'),
                Tables\Columns\TextColumn::make('description'),
                
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
            'index' => Pages\ListPresentations::route('/'),
            'create' => Pages\CreatePresentation::route('/create'),
            'edit' => Pages\EditPresentation::route('/{record}/edit'),
        ];
    }

    public static function getFormSchema(string $layout = Forms\Components\Grid::class){

        return [
            Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('description')
                            ->columnSpan([
                                'sm' => 2,
                            ]),
                        Forms\Components\DatePicker::make('published_at'),
                    ])->columns([
                        'sm' => 2,
                    ]),
                    $layout::make()
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                        ->collection('presentation-images')
                                        ->multiple()
                                        ->maxFiles(5)
                        ])
                        ->columns(1),
                ])
        ];

    }
}
