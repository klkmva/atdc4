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
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-10-12",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-10-23",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-06",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-20",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-11-27",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-12-10",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2026-12-17",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-07",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-14",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-01-21",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-02-11",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-03-04",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-03-18",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-04-01",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-04-08",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-05-13",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-05-20",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-06-03",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => "2027-06-10",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
