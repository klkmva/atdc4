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
        // Schema::dropIfExists('users');
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('first_name')->nullable();
        //     $table->string('last_name');
        //     $table->string('fullname')->virtualAs("CONCAT(first_name, ' ', last_name)");
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        // Schema::dropIfExists('password_reset_tokens');
        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

        // Schema::dropIfExists('sessions');
        // Schema::create('sessions', function (Blueprint $table) {
        //     $table->string('id')->primary();
        //     $table->foreignId('user_id')->nullable()->index();
        //     $table->string('ip_address', 45)->nullable();
        //     $table->text('user_agent')->nullable();
        //     $table->longText('payload');
        //     $table->integer('last_activity')->index();
        // });

        Schema::dropIfExists('options');
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('date_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('date_id');
            $table->unsignedBigInteger('option_id');

            $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::dropIfExists('pages');
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('menu')
                ->length('25')
                ->default('');
            $table->timestamps();
        });

        Schema::dropIfExists('members');
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->string('email', 45)->nullable();
            $table->text('address')->nullable();
            $table->string('code')->nullable();
            $table->string('city')->nullable();
            $table->date('date');
            $table->date('echeance')->virtualAs('DATE_ADD(date, INTERVAL 1 YEAR)');
            $table->timestamps();
        });

        Schema::dropIfExists('news');
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title', 255);
            $table->longText('info');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('locations');
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('address', 255)->default('');
            $table->string('full_name')->virtualAs("CONCAT(name, ', ', address)");
            $table->string('google_maps_url', 255)->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('contacts');
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

            $table->index(['first_name'], 'ifirst');
            $table->index(['last_name'], 'ilast');
        });

        Schema::dropIfExists('partners');
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

        Schema::dropIfExists('speakers');
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->longText('info')->default('');
            $table->string('image', 255)->nullable();
            $table->foreignId('contact_id')
                ->nullable()
                ->references('id')
                ->on('contacts')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->timestamps();

            $table->fullText(['first_name', 'last_name']);
        });

        Schema::dropIfExists('publishers');
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

        Schema::dropIfExists('books');
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('authors')->nullable();
            $table->text('summary')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('isbn', 20)->nullable();
            $table->foreignId('publisher_id')
                ->nullable()
                ->references('id')
                ->on('publishers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('event_speakers');
        Schema::dropIfExists('event_partner');
        Schema::dropIfExists('events');
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('date_id');
            $table->time('time')->default('19:00:00');
            $table->string('title', 400);
            $table->string('subtitle', 400)->nullable();
            $table->longText('info')->default('');
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->boolean('published')->default(1);
            $table->boolean('canceled')->default(0);
            $table->integer('spectators_counter', false, true)->default(0);
            $table->integer('books_counter', false, true)->default(0);
            $table->float('travel_cost')->default(0);
            $table->float('meal_cost')->default(0);
            $table->float('hotel_cost')->default(0);
            $table->float('total_cost')->virtualAs('travel_cost + meal_cost + hotel_cost');
            $table->string('long_date')->virtualAs('`date`');
            $table->timestamps();

            $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->fullText(['title, subtitle, info']);
            $table->index('date', 'idate');
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

        Schema::dropIfExists('date_option');
        Schema::dropIfExists('dates');
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('status');
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
