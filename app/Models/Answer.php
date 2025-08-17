<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'question_id',
        'answer', // Misalnya: 1 untuk Ya, 0 untuk Tidak (boolean atau integer)
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
