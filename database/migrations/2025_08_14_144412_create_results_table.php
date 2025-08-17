<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')
                ->nullable() // Boleh null
                ->constrained()
                ->nullOnDelete(); // Kalau tamu dihapus, set null
            $table->integer('score');
            $table->enum('interpretation', ['rendah', 'sedang', 'tinggi']);
            $table->text('explanation');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
