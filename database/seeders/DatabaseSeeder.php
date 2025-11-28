<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Location;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Publisher;
use App\Models\Speaker;
use App\Models\Work;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory()->count(20)->create();
        Contact::factory()->count(50)->create();
        Event::factory()->count(50)->create();
        Location::factory()->count(5)->create();
        Member::factory()->count(70)->create();
        Partner::factory()->count(5)->create();
        Publisher::factory()->count(10)->create();
        Speaker::factory()->count(30)->create();
        Work::factory()->count(10)->create();
    }
}
