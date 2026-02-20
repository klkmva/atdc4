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
use App\Models\Book;
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
        Member::factory()->count(70)->create();
        Publisher::factory()->count(10)->create();
        Book::factory()->count(10)->create();
        $loseeder = new LocationSeeder();
        $loseeder->run();
        $paseeder = new PartnerSeeder();
        $paseeder->run();
        $spseeder = new SpeakerSeeder();
        $spseeder->run();
        $evseeder = new EventSeeder();
        $evseeder->run();
        $evpaseeder = new EventPartnerSeeder();
        $evpaseeder->run();
        $evspseeder = new EventSpeakerSeeder();
        $evspseeder->run();
    }
}
