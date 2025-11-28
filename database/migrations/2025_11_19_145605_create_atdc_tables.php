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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->string('email', 45)->nullable();
            $table->date('date');
            $table->date('echeance')->virtualAs('DATE_ADD(date, INTERVAL 1 YEAR)');
            $table->timestamps();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title', 255);
            $table->longText('info');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('full_name')->virtualAs("CONCAT(name, ', ', address)");
            $table->string('google_maps_url', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('company', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone1', 20)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->timestamps();
        });

        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('short_name', 40)->nullable();
            $table->string('website', 255)->nullable();
            $table->foreignId('contact_id')
                ->nullable()
                ->references('id')
                ->on('contacts')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->longText('info');
            $table->string('image', 255)->nullable();
            $table->foreignId('contact_id')
                ->nullable()
                ->references('id')
                ->on('contacts')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->timestamps();
        });

        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('contact_id')
                ->nullable()
                ->references('id')
                ->on('contacts')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->string('website')->nullable();
            $table->timestamps();
        });

        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('authors')->nullable();
            $table->text('summary')->nullable();
            $table->date('publication_date')->nullable();
            $table->foreignId('publisher_id')
                ->references('id')
                ->on('publishers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create(
            'events',
            function (Blueprint $table) {
                $table->id();
                $table->date('date');
                $table->time('time');
                $table->string('title', 255);
                $table->string('subtitle', 255)->nullable();
                $table->longText('info');
                $table->unsignedBigInteger('location_id')->nullable();
                $table->unsignedBigInteger('work_id')->nullable();
                $table->string('image', 255)->nullable();
                $table->string('video')->nullable();
                $table->boolean('published')->default(1);
                $table->boolean('canceled')->default(0);
                $table->timestamps();

                $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade')->onUpdate('cascade');
            });

        Schema::create('event_speaker', function (Blueprint $table) {
            $table->unsignedBigInteger('speaker_id');
            $table->unsignedBigInteger('event_id');

            $table->foreign('speaker_id')->references('id')->on('speakers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('event_partner', function (Blueprint $table) {
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('event_id');

            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
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
