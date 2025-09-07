<?php

namespace App\Filament\Widgets;

use App\Models\Recrutment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;

class MabaOverview extends StatsOverviewWidget
{
    use HasWidgetShield;
    
    protected function getStats(): array
    {
        $user = Auth::user();
        $userId = $user ? $user->id : null;

        //Data tanggal
        $today = Carbon::now('Asia/Jakarta')->translatedFormat('d F Y');

        // Data recrutment get by auth id 
        $createdAtRecruitment = Recrutment::where('created_by', $userId)
            ->value('created_at');

        if ($createdAtRecruitment) {
            $createdAtRecruitment = \Carbon\Carbon::parse($createdAtRecruitment)->translatedFormat('d F Y');
        };

        // Data status recruitment
        $statusRecruitment = Recrutment::where('created_by', $userId)
            ->with('status')
            ->first()
            ?->status
            ?->name;

        return [
            Stat::make('Hari ini', $today)
                ->description('Semoga Harimu Menyenangkan')
                ->descriptionIcon('heroicon-m-calendar')

                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('Tanggal Daftar', $createdAtRecruitment)
                ->description('Semangat 🔥')
                ->chart([5, 3, 8, 2, 7, 1, 4])
                ->color('warning'),

            Stat::make('Status Recruitment', $statusRecruitment)
                ->description('Cek Terus Ya')
                ->descriptionIcon('heroicon-m-check-circle')
                ->chart([2, 4, 1, 3, 5, 2, 6])
                ->color('info'),
        ];
    }
}
