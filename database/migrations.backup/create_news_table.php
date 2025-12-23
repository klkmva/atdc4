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

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title', 255);
            $table->longText('info');
            $table->string('image')->nullable();
            $table->string('long_date', 40)->virtualAs('`date`');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};