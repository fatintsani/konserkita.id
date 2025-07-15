<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscountResource\Pages;
use App\Models\Discount;
use App\Models\Concert;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class DiscountResource extends Resource
{
    protected static ?string $model = Discount::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('concert_id')
                ->label('Konser')
                ->relationship('concert', 'title')
                ->required(),

            TextInput::make('discount_percentage')
                ->label('Diskon (%)')
                ->numeric()
                ->minValue(0)
                ->maxValue(100)
                ->required(),

            DatePicker::make('valid_until')
                ->label('Berlaku Sampai')
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('concert.title')
                ->label('Konser')
                ->sortable()
                ->searchable(),

            BadgeColumn::make('discount_percentage')
                ->label('Diskon')
                ->colors(['success' => fn ($state) => $state > 0])
                ->formatStateUsing(fn ($state) => $state . '%'),

            TextColumn::make('valid_until')
                ->label('Berlaku Sampai')
                ->date()
                ->sortable(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ])
        ->defaultSort('valid_until', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDiscounts::route('/'),
            'create' => Pages\CreateDiscount::route('/create'),
            'edit' => Pages\EditDiscount::route('/{record}/edit'),
        ];
    }
}
