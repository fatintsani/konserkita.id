<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConcertResource\Pages;
use App\Filament\Resources\ConcertResource\RelationManagers;
use App\Models\Concert;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\SoftDeletes;
use Filament\Tables\Filters\TrashedFilter;


class ConcertResource extends Resource
{
    protected static ?string $model = Concert::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->required()
                    ->maxLength(255),

                DateTimePicker::make('datetime')
                    ->required(),

                Select::make('genre')
                    ->options([
                        'Pop' => 'Pop',
                        'Rock' => 'Rock',
                        'Jazz' => 'Jazz',
                        'K-Pop' => 'K-Pop',
                    ])
                    ->required(),

                TextInput::make('price')
                    ->numeric()
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->directory('concerts')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('genre')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('location')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->money('IDR')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('datetime')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('datetime', 'desc')
            ->modifyQueryUsing(fn(Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
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
            'index' => Pages\ListConcerts::route('/'),
            'create' => Pages\CreateConcert::route('/create'),
            'edit' => Pages\EditConcert::route('/{record}/edit'),
        ];
    }
}
