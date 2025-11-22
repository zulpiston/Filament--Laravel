<?php

namespace App\Filament\Resources\Galerias;

use App\Filament\Resources\Galerias\Pages\CreateGaleria;
use App\Filament\Resources\Galerias\Pages\EditGaleria;
use App\Filament\Resources\Galerias\Pages\ListGalerias;
use App\Filament\Resources\Galerias\Pages\ViewGaleria;
use App\Filament\Resources\Galerias\Schemas\GaleriaForm;
use App\Filament\Resources\Galerias\Schemas\GaleriaInfolist;
use App\Filament\Resources\Galerias\Tables\GaleriasTable;
use App\Models\Galeria;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GaleriaResource extends Resource
{
    protected static ?string $model = Galeria::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Galeria';

    public static function form(Schema $schema): Schema
    {
        return GaleriaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GaleriaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GaleriasTable::configure($table);
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
            'index' => ListGalerias::route('/'),
            'create' => CreateGaleria::route('/create'),
            'view' => ViewGaleria::route('/{record}'),
            'edit' => EditGaleria::route('/{record}/edit'),
        ];
    }
}
