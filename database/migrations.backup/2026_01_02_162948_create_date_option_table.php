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
        Schema::create('date_option', function (Blueprint $table) {
            $table->foreignId('date_id')
                ->nullable()
                ->references('id')
                ->on('dates')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('option_id')
                ->nullable()
                ->references('id')
                ->on('options')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_option');
    }
};
