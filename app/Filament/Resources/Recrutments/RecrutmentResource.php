<?php

namespace App\Filament\Resources\Recrutments;

use UnitEnum;
use BackedEnum;
use App\Models\Recrutment;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Recrutments\Pages\EditRecrutment;
use App\Filament\Resources\Recrutments\Pages\ViewRecrutment;
use App\Filament\Resources\Recrutments\Pages\ListRecrutments;
use App\Filament\Resources\Recrutments\Pages\CreateRecrutment;
use App\Filament\Resources\Recrutments\Schemas\RecrutmentForm;
use App\Filament\Resources\Recrutments\Tables\RecrutmentsTable;
use App\Filament\Resources\Recrutments\Schemas\RecrutmentInfolist;

class RecrutmentResource extends Resource
{
    protected static ?string $model = Recrutment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserPlus;

    protected static string | UnitEnum | null $navigationGroup = 'Data Recruitment';

    protected static ?string $navigationLabel = 'Data Recruitment';

    protected static ?string $pluralModelLabel = 'List Data Recruitment';

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

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);

        $user = Auth::user();

        if ($user->position === 'DPP') {
            return $query;
        }

        if ($user->position === 'DPC') {
            return $query->where('branch_id', $user->branch_id);
        }

        if (is_null($user->position)) {
            return $query->where('created_by', $user->id);
        }

        return $query;
    }

    public static function getNavigationBadge(): ?string
    {
        $user = Auth::user();

        // Kalau DPP -> hitung semua data
        if ($user->position === 'DPP') {
            return static::getModel()::count();
        }

        // Kalau DPC -> hanya hitung sesuai branch_id
        if ($user->position === 'DPC') {
            return static::getModel()::where('branch_id', $user->branch_id)->count();
        }

        // Buat anggota muda -> count by created by
        if (is_null($user->position)) {
            return static::getModel()::where('created_by', $user->id)->count();
        }
        
        // Default: tidak ada badge
        return null;
    }
}
