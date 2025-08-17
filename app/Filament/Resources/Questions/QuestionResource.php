<?php

namespace App\Filament\Resources\Questions;

use App\Filament\Resources\Questions\Pages\CreateQuestion;
use App\Filament\Resources\Questions\Pages\EditQuestion;
use App\Filament\Resources\Questions\Pages\ListQuestions;
use App\Filament\Resources\Questions\Schemas\QuestionForm;
use App\Filament\Resources\Questions\Tables\QuestionsTable;
use App\Models\Question;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class QuestionResource extends Resource
{
    /**
     * Model yang digunakan oleh Resource ini
     */
    protected static ?string $model = Question::class;

    /**
     * Icon navigasi di sidebar Filament
     */
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    /**
     * Kolom yang digunakan sebagai judul/label untuk setiap record
     */
    protected static ?string $recordTitleAttribute = 'text';

    /**
     * Form schema untuk create & edit
     */
    public static function form(Schema $schema): Schema
    {
        return QuestionForm::configure($schema);
    }

    /**
     * Table schema untuk halaman list
     */
    public static function table(Table $table): Table
    {
        return QuestionsTable::configure($table);
    }

    /**
     * Relasi yang akan ditampilkan (jika ada)
     */
    public static function getRelations(): array
    {
        return [];
    }
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
{
    return parent::getEloquentQuery()
        ->withCount('answers');
}


    /**
     * Halaman yang dimiliki resource ini
     */
    public static function getPages(): array
    {
        return [
            'index' => ListQuestions::route('/'),
            'create' => CreateQuestion::route('/create'),
            'edit' => EditQuestion::route('/{record}/edit'),
        ];
    }
}
