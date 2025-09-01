<?php

namespace App\Filament\Resources\BranchDetails;

use App\Filament\Resources\BranchDetails\Pages\CreateBranchDetail;
use App\Filament\Resources\BranchDetails\Pages\EditBranchDetail;
use App\Filament\Resources\BranchDetails\Pages\ListBranchDetails;
use App\Filament\Resources\BranchDetails\Pages\ViewBranchDetail;
use App\Filament\Resources\BranchDetails\Schemas\BranchDetailForm;
use App\Filament\Resources\BranchDetails\Schemas\BranchDetailInfolist;
use App\Filament\Resources\BranchDetails\Tables\BranchDetailsTable;
use App\Models\BranchDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class BranchDetailResource extends Resource
{
    protected static ?string $model = BranchDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice2;

    protected static string | UnitEnum | null $navigationGroup = 'Data Cabang';

    protected static ?string $navigationLabel = 'List Cabang';

    protected static ?string $pluralModelLabel = 'List Cabang';

    public static function form(Schema $schema): Schema
    {
        return BranchDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BranchDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BranchDetailsTable::configure($table);
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
            'index' => ListBranchDetails::route('/'),
            'create' => CreateBranchDetail::route('/create'),
            'view' => ViewBranchDetail::route('/{record}'),
            'edit' => EditBranchDetail::route('/{record}/edit'),
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
