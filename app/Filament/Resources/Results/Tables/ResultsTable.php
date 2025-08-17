<?php

namespace App\Filament\Resources\Results\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\Action;
use App\Models\Result;
use App\Models\Guest;
use App\Models\Answer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ResultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guest.name')
                    ->label('Tamu')
                    ->color('info')
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('score')
                    ->label('Skor')
                    ->color('success')
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('interpretation')
                    ->label('Interpretasi')
                    ->wrap()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('explanation')
                    ->label('Penjelasan')
                    ->wrap()
                    ->color('secondary'),
            ])
            ->filters([])
            ->recordActions([
                Action::make('print')
                    ->label('Print')
                    ->icon('heroicon-o-printer')
                    ->color('primary')
                    ->action(function ($record) {
                        $pdf = Pdf::loadView('pdf.result', [
                            'result' => $record,
                            'guest' => $record->guest,
                        ]);

                        $filename = 'result_' . $record->id . '_' . time() . '.pdf';
                        Storage::put('public/pdf/' . $filename, $pdf->output());

                        return response()->streamDownload(function () use ($pdf) {
                            echo $pdf->stream();
                        }, $filename);
                    }),
                Action::make('delete')
                    ->label('Hapus')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(function ($record) {
                        Answer::where('guest_id', $record->guest_id)->delete();
                        $guestId = $record->guest_id;
                        $record->delete();
                        Guest::where('id', $guestId)->delete();
                    })
                    ->successNotificationTitle('Data dan tamu berhasil dihapus'),
            ])
            ->headerActions([
                Action::make('print_all')
                    ->label('Print Semua')
                    ->icon('heroicon-o-printer')
                    ->color('success')
                    ->action(function () {
                        $results = Result::with('guest')->get();
                        $pdf = Pdf::loadView('pdf.results_all', [
                            'results' => $results,
                        ]);

                        $filename = 'all_results_' . time() . '.pdf';
                        Storage::put('public/pdf/' . $filename, $pdf->output());

                        return response()->streamDownload(function () use ($pdf) {
                            echo $pdf->stream();
                        }, $filename);
                    }),
                Action::make('delete_all')
                    ->label('Hapus Semua')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(function () {
                        // Matikan pengecekan foreign key
                        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

                        Answer::truncate();
                        Result::truncate();
                        Guest::truncate();

                        // Aktifkan kembali pengecekan foreign key
                        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
                    })
                    ->successNotificationTitle('Semua data dan tamu berhasil dihapus'),
            ])
            ->bulkActions([]);
    }
}
