<?php

namespace App\Filament\Widgets;

use App\Models\Recrutment;
use Illuminate\Support\Facades\Auth;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class DpcOverview extends StatsOverviewWidget
{
    use HasWidgetShield;
    
    protected function getStats(): array
    {
        $user = Auth::user();

        // Pastikan ada user
        $branchId = $user ? $user->branch_id : null;

        // Hitung recruitment sesuai branch
        $recruitmentCount = $branchId 
            ? Recrutment::where('branch_id', $branchId)->count() 
            : 0;
        
        // Recruitment dengan status_id = 1
        $status1Count = $branchId 
            ? Recrutment::where('branch_id', $branchId)
                        ->where('status_id', 1)
                        ->count() 
            : 0;

        // Recruitment dengan status_id = 2
        $status2Count = $branchId 
            ? Recrutment::where('branch_id', $branchId)
                        ->where('status_id', 2)
                        ->count() 
            : 0;

        return [
            Stat::make('Jumlah Recruitment Anggota', $recruitmentCount)
                ->description('Anggota')
                ->descriptionIcon('heroicon-m-user-plus')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('Recruitment Belum Diverifikasi', $status1Count)
                ->description('Recrutment')
                ->descriptionIcon('heroicon-m-check-circle')
                ->chart([5, 3, 8, 2, 7, 1, 4])
                ->color('warning'),

            Stat::make('Recruitment Terverifikasi', $status2Count)
                ->description('Recrutment')
                ->descriptionIcon('heroicon-m-x-circle')
                ->chart([2, 4, 1, 3, 5, 2, 6])
                ->color('danger'),
        ];
    }
}
