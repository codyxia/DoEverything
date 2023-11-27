<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CraftListUserResource\Pages;
use App\Filament\Resources\CraftListUserResource\RelationManagers;
use App\Models\Company;
use App\Models\CraftListUser;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CraftListUserResource extends Resource
{
    protected static ?string $model = CraftListUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->required()
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search): array => Company::where('alias', 'like', "%{$search}%")->limit(50)->pluck('alias', 'company_uuid')->toArray())
                    ->getOptionLabelUsing(fn ($value): ?string => Company::find($value)?->alias),
                Forms\Components\TextInput::make('name')
                ->required(),
                Forms\Components\TextInput::make('telephone')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('telephone'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);

//            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
//            ]);
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
            'index' => Pages\ListCraftListUsers::route('/'),
            'create' => Pages\CreateCraftListUser::route('/create'),
            'edit' => Pages\EditCraftListUser::route('/{record}/edit'),
        ];
    }
}
