<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Guest;

class GenderStatsWidget extends BaseWidget
{
    protected ?string $heading = 'Statistik Jenis Kelamin Tamu';
    protected ?string $description = 'Jumlah tamu laki-laki dan perempuan';

    protected function getStats(): array
    {
        $maleCount = Guest::where('gender', 'male')->count();
        $femaleCount = Guest::where('gender', 'female')->count();
        $totalCount = $maleCount + $femaleCount;

        return [
            // Total dengan gradient biru-ungu
            Stat::make('Total Tamu', $totalCount)
                ->description('Jumlah seluruh tamu')
                ->extraAttributes([
                    'class' => 'bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 text-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-purple-300',
                ])
                ->icon('heroicon-o-users')
                ->color('success'),

            // Laki-laki dengan gradient biru-cyan
            Stat::make('Laki-laki', $maleCount)
                ->description('Jumlah tamu laki-laki')
                ->extraAttributes([
                    'class' => 'bg-gradient-to-br from-cyan-500 via-blue-600 to-indigo-700 text-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-cyan-300',
                ])
                ->icon('heroicon-o-user')
                ->color('info'),

            // Perempuan dengan gradient pink-rose
            Stat::make('Perempuan', $femaleCount)
                ->description('Jumlah tamu perempuan')
                ->extraAttributes([
                    'class' => 'bg-gradient-to-br from-pink-500 via-rose-600 to-red-600 text-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300 border border-pink-300',
                ])
                ->icon('heroicon-o-user-group')
                ->color('warning'),
        ];
    }
}
