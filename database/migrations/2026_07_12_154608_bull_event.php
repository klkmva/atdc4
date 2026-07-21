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
        Schema::create(
            'bullevent',
            function (Blueprint $table) {
                $table->unsignedBigInteger('event_id');
                $table->unsignedBigInteger('bulletin_id');
                $table->string('title');
                $table->string('subtitle')->nullable();
                $table->longText('info');
                $table->string('date');
                $table->string('place');
                $table->string('image');
                $table->string('partners');
                $table->index(['event_id', 'bulletin_id']);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bullevent');
    }
};
