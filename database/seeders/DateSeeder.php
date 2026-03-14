<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dates')->insert([
            [
                'date' => "2026-09-25",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-10-12",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-10-23",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-06",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-20",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-27",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-12-10",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-12-17",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-07",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-14",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-21",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-02-11",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-03-04",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-03-18",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-04-01",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-04-08",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-05-13",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-05-20",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-06-03",
                'ceaated_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-06-10",
                'ceaated_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
