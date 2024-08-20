<?php

namespace App\Filament\Resources\HotelResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChambreRelationManager extends RelationManager
{
    protected static string $relationship = 'chambres';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('numero_de_chambre')
                ->required(),
                Forms\Components\Select::make('type_de_chambre')
                ->required()
                    ->options([
                        'standard' => 'standard',
                        'deluxe' => 'deluxe',
                        'suite' => 'suite',
                    ]),
                Forms\Components\TextInput::make('prix_par_nuit')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('capacite')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('est_disponible')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('image_chambres')
                    ->relationship('imageChambres') // Utilisation de la relation 'imageChambres'
                    ->schema([
                        Forms\Components\FileUpload::make('image_path')
                        ->image()
                        ->directory('image/chambres')
                        ->required(),
                        Forms\Components\TextInput::make('description')
                        ->nullable(),
                    ])
                    ->label('Images')
                    ->required()
                    ->columnSpanFull(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('numero_de_chambre')
            ->columns([
                Tables\Columns\TextColumn::make('hotel_id'),
                Tables\Columns\TextColumn::make('numero_de_chambre'),
                Tables\Columns\TextColumn::make('type_de_chambre'),
                Tables\Columns\TextColumn::make('prix_par_nuit'),
                Tables\Columns\TextColumn::make('capacite'),
                Tables\Columns\BooleanColumn::make('est_disponible'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\ImageColumn::make('imageChambres.image_path')
                    ->circular()
                    ->stacked()
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

}
