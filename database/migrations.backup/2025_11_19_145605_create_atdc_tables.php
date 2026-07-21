<?php

use App\Models\Book;
use App\Models\Contact;
use App\Models\Date;
use App\Models\Event;
use App\Models\Location;
use App\Models\Option;
use App\Models\Partner;
use App\Models\Publisher;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\DatabaseSeeder;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        try {
            Schema::table('partners', function (Blueprint $table) {
                $table->dropForeign(['contact_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('speakers', function (Blueprint $table) {
                $table->dropForeign(['contact_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('publishers', function (Blueprint $table) {
                $table->dropForeign(['contact_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('books', function (Blueprint $table) {
                $table->dropForeign(['publisher_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('events', function (Blueprint $table) {
                $table->dropForeign(['book_id']);
                $table->dropForeign(['location_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('event_speaker', function (Blueprint $table) {
                $table->dropForeign(['event_id']);
                $table->dropForeign(['speaker_id']);
            });
        }
        catch (Exception $e) {
            //
        }
        try {
            Schema::table('event_partner', function (Blueprint $table) {
                $table->dropForeign(['event_id']);
                $table->dropForeign(['partner_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('date_option', function (Blueprint $table) {
                $table->dropForeign(['date_id']);
                $table->dropForeign(['option_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('options', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
                $table->dropForeign(['book_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('menu_items', function (Blueprint $table) {
                $table->dropForeign(['parent_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('sessions', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('failed_import_rows', function (Blueprint $table) {
                $table->dropForeign(['import_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('imports', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
        } catch (Exception $e) {
            //
        }
        try {
            Schema::table('exports', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
            echo 'sessions drop foreign';
        } catch (Exception $e) {
            //
        }

        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name');
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->boolean('is_admin')->default(false);
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::dropIfExists('imports');
        Schema::create('imports', function (Blueprint $table): void {
            $table->id();
            $table->timestamp('completed_at')->nullable();
            $table->string('file_name');
            $table->string('file_path');
            $table->string('importer');
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('total_rows');
            $table->unsignedInteger('successful_rows')->default(0);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::dropIfExists('failed_import_rows');
        Schema::create('failed_import_rows', function (Blueprint $table): void {
            $table->id();
            $table->json('data');
            $table->foreignId('import_id')->constrained()->cascadeOnDelete();
            $table->text('validation_error')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('exports');
        Schema::create('exports', function (Blueprint $table): void {
            $table->id();
            $table->timestamp('completed_at')->nullable();
            $table->string('file_disk');
            $table->string('file_name')->nullable();
            $table->string('exporter');
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('total_rows');
            $table->unsignedInteger('successful_rows')->default(0);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('password_reset_tokens');
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::dropIfExists('sessions');
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
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
            $table->double('amount');
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
            $table->time('time')->default('00:00:00');
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
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->string('company', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone1', 20)->nullable();
            $table->string('phone2', 20)->nullable();
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
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::dropIfExists('speakers');
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ', last_name)");
            $table->longText('info')->default('');
            $table->string('image', 255)->nullable();
            $table->foreignId('contact_id')
                ->nullable()
                ->references('id')
                ->on('contacts')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::dropIfExists('event_speaker');
        Schema::dropIfExists('event_partner');
        Schema::dropIfExists('events');
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time')->default('19:00:00');
            $table->string('title', 400);
            $table->string('subtitle', 400)->nullable();
            $table->longText('info')->default('');
            $table->foreignId('location_id')
                ->nullable()
                ->references('id')
                ->on('locations')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreignId('book_id')
                ->nullable()
                ->references('id')
                ->on('books')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->boolean('published')->default(1);
            $table->boolean('canceled')->default(0);
            $table->integer('spectators_counter', false, true)->nullable()->default(0);
            $table->integer('books_counter', false, true)->nullable()->default(0);
            $table->float('travel_cost')->nullable()->default(0);
            $table->float('meal_cost')->nullable()->default(0);
            $table->float('hotel_cost')->nullable()->default(0);
            $table->float('total_cost')->virtualAs('travel_cost + meal_cost + hotel_cost');
            $table->string('long_date')->virtualAs('`date`');
            $table->timestamps();

            $table->fullText(['title','subtitle','info']);
            $table->index('date', 'idate');
        });

        Schema::create('event_speaker', function (Blueprint $table) {
            $table->foreignId('speaker_id')
                ->references('id')
                ->on('speakers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('event_id')
                ->references('id')
                ->on('events')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('event_partner', function (Blueprint $table) {
            $table->foreignId('partner_id')
                ->references('id')
                ->on('partners')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('event_id')
                ->references('id')
                ->on('events')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::dropIfExists('date_option');
        Schema::dropIfExists('dates');
        Schema::dropIfExists('options');
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('date_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('date_id')
                ->references('id')
                ->on('dates')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('option_id')
                ->references('id')
                ->on('options')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::dropIfExists('menu_items');
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['page', 'menu'])
                ->required()
                ->default('page');
            $table->integer('order');
            $table->bigInteger('parent_id', false, false)
                ->default(0);
            $table->string('url', 15);
            $table->string('title', 25);
            $table->longText('content')
                ->nullable();
            $table->timestamps();
        });

        $dbseeder = new DatabaseSeeder;
        $dbseeder->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
