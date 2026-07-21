<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bulletin_speaker', function (Blueprint $table) {
            $table->foreignId('bulletin_id')
                ->references('id')
                ->on('bulletins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('speaker_id')
                ->references('id')
                ->on('speakers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulletin_speaker');
    }
};
