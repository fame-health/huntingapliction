<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;

class GuestStatsPieChartWidget extends ChartWidget
{
    protected ?string $heading = 'Persentase Status Stunting per Gender';

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getData(): array
    {
        // Ambil data dari guests + results
        $data = Guest::leftJoin('results', 'guests.id', '=', 'results.guest_id')
            ->select(
                'guests.gender',
                DB::raw("LOWER(COALESCE(results.interpretation, 'unknown')) as status"),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('gender', 'status')
            ->get();

        // Siapkan data default
        $pieData = [
            'Laki-laki Rendah' => 0,
            'Laki-laki Sedang' => 0,
            'Laki-laki Tinggi' => 0,
            'Perempuan Rendah' => 0,
            'Perempuan Sedang' => 0,
            'Perempuan Tinggi' => 0,
        ];

        // Isi data dari query
        foreach ($data as $row) {
            if ($row->gender === 'male') {
                if ($row->status === 'rendah') {
                    $pieData['Laki-laki Rendah'] += $row->total;
                } elseif ($row->status === 'sedang') {
                    $pieData['Laki-laki Sedang'] += $row->total;
                } elseif ($row->status === 'tinggi') {
                    $pieData['Laki-laki Tinggi'] += $row->total;
                }
            } elseif ($row->gender === 'female') {
                if ($row->status === 'rendah') {
                    $pieData['Perempuan Rendah'] += $row->total;
                } elseif ($row->status === 'sedang') {
                    $pieData['Perempuan Sedang'] += $row->total;
                } elseif ($row->status === 'tinggi') {
                    $pieData['Perempuan Tinggi'] += $row->total;
                }
            }
        }

        return [
            'labels' => array_keys($pieData),
            'datasets' => [
                [
                    'label' => 'Jumlah',
                    'backgroundColor' => [
                        '#3B82F6', // Laki-laki Rendah
                        '#2563EB', // Laki-laki Sedang
                        '#1E40AF', // Laki-laki Tinggi
                        '#F472B6', // Perempuan Rendah
                        '#DB2777', // Perempuan Sedang
                        '#9D174D', // Perempuan Tinggi
                    ],
                    'data' => array_values($pieData),
                ],
            ],
        ];
    }
}
