<?php

namespace App\Filament\Resources\Benners;

use App\Filament\Resources\Benners\Pages\CreateBenner;
use App\Filament\Resources\Benners\Pages\EditBenner;
use App\Filament\Resources\Benners\Pages\ListBenners;
use App\Filament\Resources\Benners\Schemas\BennerForm;
use App\Filament\Resources\Benners\Tables\BennersTable;
use App\Models\Benner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BennerResource extends Resource
{
    protected static ?string $model = Benner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BennerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BennersTable::configure($table);
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
            'index' => ListBenners::route('/'),
            'create' => CreateBenner::route('/create'),
            'edit' => EditBenner::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
