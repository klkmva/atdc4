<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            'id' => 3,
            'name' => "Ville de Clermont-Ferrand"
        ]);
        DB::table('partners')->insert([
            'id' => 4,
            'name' => "Librairie Les Raconteurs d'Histoires"
        ]);
        DB::table('partners')->insert([
            'id' => 5,
            'name' => "Syndicat des Avocats de france SAF, BCG Avocats",
            'short_name' => "SAF"
        ]);
        DB::table('partners')->insert([
            'id' => 6,
            'name' => "Association France-Palestine 63",
            'short_name' => "AFPS 63"
        ]);
        DB::table('partners')->insert([
            'id' => 8,
            'name' => "Juristes pour le Respect du Droit International",
            'short_name' => "JURDI"
        ]);
        DB::table('partners')->insert([
            'id' => 9,
            'name' => "Collectif : Pas Sans Nous"
        ]);
    }
}
