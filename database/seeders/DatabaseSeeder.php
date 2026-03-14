<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dtseeder = new DateSeeder();
        $dtseeder->run();
        $meseeder = new MemberSeeder();
        $meseeder->run();
        $puseeder = new PublisherSeeder();
        $puseeder->run();
        $boseeder = new BookSeeder();
        $boseeder->run();
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
