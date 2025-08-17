<?php

namespace App\Filament\Resources\Results\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ResultForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Nilai Score
                TextInput::make('score')
                    ->numeric()
                    ->label('Skor')
                    ->required()
                    ->live() // Memperbarui nilai secara real-time
                    ->afterStateUpdated(function ($state, $set) {
                        // Otomatis set interpretasi berdasarkan skor
                        if ($state <= 7) {
                            $set('interpretation', 'rendah');
                        } elseif ($state <= 13) {
                            $set('interpretation', 'sedang');
                        } else {
                            $set('interpretation', 'tinggi');
                        }
                    }),

                // Interpretasi (akan terisi otomatis)
                Select::make('interpretation')
                    ->label('Interpretasi')
                    ->options([
                        'rendah' => 'Rendah (0-7)',
                        'sedang' => 'Sedang (8-13)',
                        'tinggi' => 'Tinggi (14-20)',
                    ])
                    ->required()
                    ->disabled(fn ($get) => $get('score') !== null), // Nonaktifkan jika skor sudah ada

                // Penjelasan
                Textarea::make('explanation')
                    ->label('Penjelasan')
                    ->rows(4)
                    ->required(),
            ]);
    }
}
