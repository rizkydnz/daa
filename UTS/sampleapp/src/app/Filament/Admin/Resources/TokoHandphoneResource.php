<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TokoHandphoneResource\Pages;
use App\Filament\Admin\Resources\TokoHandphoneResource\RelationManagers;
use App\Models\TokoHandphone;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoHandphoneResource extends Resource
{
    protected static ?string $model = TokoHandphone::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Merk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Warna')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Tipe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Merk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('Warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListTokoHandphones::route('/'),
            'create' => Pages\CreateTokoHandphone::route('/create'),
            'edit' => Pages\EditTokoHandphone::route('/{record}/edit'),
        ];
    }
}
