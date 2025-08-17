<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Guest;

class GuestStatsChartWidget extends ChartWidget
{
    protected ?string $heading = 'Statistik Tamu';

    // Jenis chart (bar, line, pie)
    protected function getType(): string
    {
        return 'bar';
    }

    // Data yang ditampilkan di chart
    protected function getData(): array
    {
        // Hitung jumlah tamu berdasarkan jenis kelamin
        $maleCount = Guest::where('gender', 'male')->count();
        $femaleCount = Guest::where('gender', 'female')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Tamu',
                    'data' => [$maleCount, $femaleCount],
                    'backgroundColor' => ['#3B82F6', '#EC4899'],
                ],
            ],
            'labels' => ['Laki-laki', 'Perempuan'],
        ];
    }
}
