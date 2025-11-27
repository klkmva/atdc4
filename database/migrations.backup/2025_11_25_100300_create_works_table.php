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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->date('authors')->nullable();
            $table->text('summary')->nullable();
            $table->string('publication_date')->nullable();
            $table->foreignId('publisher_id')
                ->references('id')
                ->on('publishers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->year('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
