<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Branch;
use App\Models\Recrutment;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DppOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $userCount = User::count();
        $branchCount = Branch::count();
        $recruitmentCount = Recrutment::count();

        return [
            Stat::make('Jumlah Pengguna', $userCount)
                ->description('Pengguna')
                ->descriptionIcon('heroicon-m-user')
                ->chart([7, 2, 10, 3, 15, 20, 32])
                ->color('info'),
            Stat::make('Jumlah DPC', $branchCount)
                ->description('DPC')
                ->descriptionIcon('heroicon-m-building-office')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),
            Stat::make('Jumlah Recruitment Anggota', $recruitmentCount)
                ->description('Anggota')
                ->descriptionIcon('heroicon-m-user-plus')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
