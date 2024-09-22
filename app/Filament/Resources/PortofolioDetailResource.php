<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortofolioDetailResource\Pages;
use App\Filament\Resources\PortofolioDetailResource\RelationManagers;
use App\Models\PortofolioDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortofolioDetailResource extends Resource
{
    protected static ?string $model = portofolioDetail::class;

    protected static ?string $navigationIcon = 'heroicon-m-photo';

    protected static ?string $navigationGroup = 'Portofolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\CheckboxList::make('portofolio_categories_id')
                    ->relationship('portofolio_categories','name')
                    ->columns(2)
                    ->required(),
                Forms\Components\CheckboxList::make('tool_id')
                    ->relationship('list_tools', 'name')
                    ->columns(2)
                    ->required(),
                Forms\Components\FileUpload::make('image_cover')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('image_detail')
                    ->multiple()
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\ImageColumn::make('image_cover'),
                Tables\Columns\ImageColumn::make('image_detail')
                    ->wrap(),
                Tables\Columns\TextColumn::make('list_tools.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('portofolio_categories.name')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListPortofolioDetails::route('/'),
            'create' => Pages\CreatePortofolioDetail::route('/create'),
            'edit' => Pages\EditPortofolioDetail::route('/{record}/edit'),
        ];
    }
}
