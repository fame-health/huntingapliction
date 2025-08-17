<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')
                ->nullable() // Boleh kosong
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('question_id')
                ->constrained()
                ->onDelete('cascade');
            $table->boolean('answer'); // 1 = Ya, 0 = Tidak
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
