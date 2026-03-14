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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['page', 'menu'])
                ->required()
                ->default('page');
            $table->integer('order');
            $table->foreignId('parent_id')
                ->nullable()
                ->default(null)
                ->constrained('menu_items');
            $table->string('url', 15);
            $table->string('title', 25);
            $table->longText('content')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
