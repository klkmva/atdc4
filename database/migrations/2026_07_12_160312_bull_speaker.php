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
            'bullspeaker',
            function (Blueprint $table) {
                $table->unsignedBigInteger('speaker_id');
                $table->unsignedBigInteger('bulletin_id');
                $table->string('name');
                $table->longText('info');
                $table->index(['speaker_id', 'bulletin_id']);
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bullspeaker');
    }
};
