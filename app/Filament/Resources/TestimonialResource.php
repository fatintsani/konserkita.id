<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('name')->required(),
            TextInput::make('profession')->required(),
            Textarea::make('message')->required(),
            Select::make('rating')
                ->options([
                    1 => '⭐ 1',
                    2 => '⭐⭐ 2',
                    3 => '⭐⭐⭐ 3',
                    4 => '⭐⭐⭐⭐ 4',
                    5 => '⭐⭐⭐⭐⭐ 5',
                ])
                ->required(),
            FileUpload::make('image')
                ->image()
                ->directory('testimonials')
                ->nullable(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('profession'),
                TextColumn::make('rating')->sortable(),
                TextColumn::make('message')->limit(30),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
