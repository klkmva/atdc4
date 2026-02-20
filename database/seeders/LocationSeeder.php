<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'id' => '1',
            'name' => 'Espace municipal Georges Conchon, Rue L&eacute;o Lagrange',
            'google_maps_url' => 'https://maps.app.goo.gl/3QYdg29dci6cEHvJ7'
        ]);
        DB::table('locations')->insert([
            'id' => '2',
            'name' => 'Cin&eacute;ma Le Rio, Rue sous les Vignes',
            'google_maps_url' => 'https://maps.app.goo.gl/7Jxms3UB1Le1sbE88'
        ]);
        DB::table('locations')->insert([
            'id' => '3',
            'name' => 'Librairie les Volcans, Bd François Mitterand',
            'google_maps_url' => 'https://maps.app.goo.gl/LbGgXUvmChCAcCSC6'
        ]);
    }
}
