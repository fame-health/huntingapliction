<?php

namespace App\Filament\Resources\Questions\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;

class QuestionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('text')
                    ->label('Pertanyaan')
                    ->searchable(),

                TextColumn::make('answers.answer')
                    ->label('Jawaban')
                    ->formatStateUsing(function ($state) {
                        if ($state === 1 || $state === '1') {
                            return 'Ya';
                        } elseif ($state === 0 || $state === '0') {
                            return 'Tidak';
                        }
                        return '-';
                    })
                    ->badge(),

                TextColumn::make('answers_count')
                    ->counts('answers')
                    ->label('Jumlah Jawaban'),
            ])
            ->filters([
                //
            ])

            ->bulkActions([

            ]);
    }
}
