<?php

namespace App\Filament\Resources\Questions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

class QuestionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('text')
                    ->label('Pertanyaan')
                    ->required(),

                Repeater::make('answers')
                    ->label('Jawaban')
                    ->relationship('answers')
                    ->schema([
                        Select::make('answer')
                            ->label('Jawaban')
                            ->options([
                                1 => 'Ya',
                                0 => 'Tidak',
                            ])
                            ->required()
                            ->native(false),
                    ])
                    ->columns(1),
            ]);
    }
}
