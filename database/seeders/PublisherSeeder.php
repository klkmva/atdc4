<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
        [
            'id' => 1,
            'name' => "Flammarion",
            'contact_id' => null,
            'website' => "https://editions.flammarion.com",
            'created_at' => "2026-03-07 19:58:40.000",
            'updated_at' => "2026-03-07 19:58:40.000"
        ],
        [
            'id' => 2,
            'name' => "La Découverte",
            'contact_id' => null,
            'website' => "https://www.editionsladecouverte.fr",
            'created_at' => "2026-03-07 20:01:57.000",
            'updated_at' => "2026-03-07 20:37:32.000"
        ],
        [
            'id' => 3,
            'name' => "Les Arènes",
            'contact_id' => null,
            'website' => "https://arenes.fr",
            'created_at' => "2026-03-07 20:08:49.000",
            'updated_at' => "2026-03-07 20:08:49.000"
        ],
        [
            'id' => 4,
            'name' => "Amsterdam",
            'contact_id' => null,
            'website' => "https://www.editionsamsterdam.fr",
            'created_at' => "2026-03-07 20:11:35.000",
            'updated_at' => "2026-03-07 20:11:35.000"
        ],
        [
            'id' => 5,
            'name' => "Éditions Textuel",
            'contact_id' => null,
            'website' => "https://www.editionstextuel.com",
            'created_at' => "2026-03-07 20:22:53.000",
            'updated_at' => "2026-03-07 20:22:53.000"
        ],
        [
            'id' => 6,
            'name' => "Éditions de l'Atelier",
            'contact_id' => null,
            'website' => "https://editionsatelier.com",
            'created_at' => "2026-03-07 20:26:44.000",
            'updated_at' => "2026-03-07 20:26:44.000"
        ],
        [
            'id' => 7,
            'name' => "Hémisphères",
            'contact_id' => null,
            'website' => null,
            'created_at' => "2026-03-07 20:33:03.000",
            'updated_at' => "2026-03-07 20:33:03.000"
        ],
        [
            'id' => 8,
            'name' => "Presses Universitaires de France",
            'contact_id' => null,
            'website' => "https://www.puf.com/accueil",
            'created_at' => "2026-03-07 20:43:56.000",
            'updated_at' => "2026-03-07 20:43:56.000"
        ],
        [
            'id' => 9,
            'name' => "Actes Sud",
            'contact_id' => null,
            'website' => "https://actes-sud.fr/",
            'created_at' => "2026-03-07 20:47:12.000",
            'updated_at' => "2026-03-07 20:47:12.000"
        ],
        [
            'id' => 10,
            'name' => "Champ Vallon",
            'contact_id' => null,
            'website' => "https://www.champ-vallon.com/",
            'created_at' => "2026-03-07 20:51:14.000",
            'updated_at' => "2026-03-07 20:51:14.000"
        ],
        [
            'id' => 11,
            'name' => "Les Éditions Sociales",
            'contact_id' => null,
            'website' => "https://editionssociales.fr",
            'created_at' => "2026-03-07 20:56:22.000",
            'updated_at' => "2026-03-07 20:56:22.000"
        ],
        [
            'id' => 12,
            'name' => "Éditions Points",
            'contact_id' => null,
            'website' => "https://www.editionspoints.com",
            'created_at' => "2026-03-07 20:59:29.000",
            'updated_at' => "2026-03-07 20:59:29.000"
        ],
        [
            'id' => 13,
            'name' => "CNRS EDITIONS",
            'contact_id' => null,
            'website' => null,
            'created_at' => "2026-03-07 21:04:58.000",
            'updated_at' => "2026-03-07 21:04:58.000"
        ],
        [
            'id' => 14,
            'name' => "Anacharsis",
            'contact_id' => null,
            'website' => "https://www.editions-anacharsis.com/Anacharsis",
            'created_at' => "2026-03-08 18:06:05.000",
            'updated_at' => "2026-03-08 18:06:05.000"
        ],
        [
            'id' => 15,
            'name' => "Le Seuil",
            'contact_id' => null,
            'website' => "https://www.seuil.com",
            'created_at' => "2026-03-08 18:11:02.000",
            'updated_at' => "2026-03-08 18:11:02.000"
        ],
        [
            'id' => 16,
            'name' => "Presses Universitaires Blaise-Pascal",
            'contact_id' => null,
            'website' => null,
            'created_at' => "2026-03-09 08:39:14.000",
            'updated_at' => "2026-03-09 08:39:14.000"
        ],
        [
            'id' => 17,
            'name' => "Éditions Divergence",
            'contact_id' => null,
            'website' => "https://www.editionsdivergences.com",
            'created_at' => "2026-03-09 08:42:31.000",
            'updated_at' => "2026-03-09 08:42:31.000"
        ],
        [
            'id' => 18,
            'name' => "L'échappée",
            'contact_id' => null,
            'website' => "https://www.lechappee.org",
            'created_at' => "2026-03-09 08:45:59.000",
            'updated_at' => "2026-03-09 08:45:59.000"
        ],
        [
            'id' => 19,
            'name' => "Le passager clandestin",
            'contact_id' => null,
            'website' => "https://www.lepassagerclandestin.fr",
            'created_at' => "2026-03-09 08:58:31.000",
            'updated_at' => "2026-03-09 08:58:31.000"
        ],
        [
            'id' => 20,
            'name' => "Presses Universitaires Aix-Marseille",
            'contact_id' => null,
            'website' => "https://presses-universitaires.univ-amu.fr/",
            'created_at' => "2026-03-09 09:02:12.000",
            'updated_at' => "2026-03-09 09:02:12.000"
        ]
    ]);

    }
}
