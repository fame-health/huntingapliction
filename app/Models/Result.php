<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'score',
        'interpretation', // Misalnya: 'rendah', 'sedang', 'tinggi'
        'explanation', // Penjelasan berdasarkan interpretasi
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
