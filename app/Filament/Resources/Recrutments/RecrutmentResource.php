<?php

namespace App\Filament\Resources\Recrutments;

use App\Filament\Resources\Recrutments\Pages\CreateRecrutment;
use App\Filament\Resources\Recrutments\Pages\EditRecrutment;
use App\Filament\Resources\Recrutments\Pages\ListRecrutments;
use App\Filament\Resources\Recrutments\Pages\ViewRecrutment;
use App\Filament\Resources\Recrutments\Schemas\RecrutmentForm;
use App\Filament\Resources\Recrutments\Schemas\RecrutmentInfolist;
use App\Filament\Resources\Recrutments\Tables\RecrutmentsTable;
use App\Models\Recrutment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecrutmentResource extends Resource
{
    protected static ?string $model = Recrutment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Recrutment';

    public static function form(Schema $schema): Schema
    {
        return RecrutmentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RecrutmentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RecrutmentsTable::configure($table);
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
            'index' => ListRecrutments::route('/'),
            'create' => CreateRecrutment::route('/create'),
            'view' => ViewRecrutment::route('/{record}'),
            'edit' => EditRecrutment::route('/{record}/edit'),
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
