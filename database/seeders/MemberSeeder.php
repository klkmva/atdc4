<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            'id' => 7,
            'last_name' => "CONSTANT",
            'first_name' => "Xavier",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 8,
            'last_name' => "DELLA GIOSTINA",
            'first_name' => "Camille",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 9,
            'last_name' => "JOBERT",
            'first_name' => "Clotilde",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 10,
            'last_name' => "JOUVE",
            'first_name' => "Jean Marc ",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\nCournon D´Auvergne",
        ]);
        DB::table('members')->insert([
            'id' => 11,
            'last_name' => "JOUVE",
            'first_name' => "Dany",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\nCournon D´Auvergne",
        ]);
        DB::table('members')->insert([
            'id' => 12,
            'last_name' => "RAYNAUD",
            'first_name' => "Christian",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 13,
            'last_name' => "FAURE",
            'first_name' => "Pierre",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63430\n",
        ]);
        DB::table('members')->insert([
            'id' => 14,
            'last_name' => "ALIBERT",
            'first_name' => "Anne Marie",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "60 rue de Nohanent\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 15,
            'last_name' => "ARCHIMBAUD",
            'first_name' => "Simone",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "46 A rue Gourgouillon\n63100\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 16,
            'last_name' => "BEURIER",
            'first_name' => "Bouhadim",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Rés  Fabienne\n1 T rue Philippe Glangeaud\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 17,
            'last_name' => "BODEAU",
            'first_name' => "Jacqueline",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Résidence Maupassant 41 Av Max Dormoy\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 18,
            'last_name' => "BOITEUX ou LAIBE",
            'first_name' => "",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "La Cheneviere\n63520\nEstandeuil",
        ]);
        DB::table('members')->insert([
            'id' => 19,
            'last_name' => "BOULOTON",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "16 B Boulevard Docteur Roche\n63130\nRoyat",
        ]);
        DB::table('members')->insert([
            'id' => 20,
            'last_name' => "BOUTGNY",
            'first_name' => "Michelle",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "9 rue Sully\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 21,
            'last_name' => "BRUNIE",
            'first_name' => "Daniel",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 rue de la Marthurette\n63200\nRiom",
        ]);
        DB::table('members')->insert([
            'id' => 22,
            'last_name' => "CANIN",
            'first_name' => "Jean Pierre",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Fontcron 2 rue de Sarlan\n63270\nYronde et Buron",
        ]);
        DB::table('members')->insert([
            'id' => 23,
            'last_name' => "CHAYLA",
            'first_name' => "Paul",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "18 Petite Allée de Gergovie\n63110\nBeaumont",
        ]);
        DB::table('members')->insert([
            'id' => 24,
            'last_name' => "CHIROL",
            'first_name' => "Jean-Louis",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "1 rue de la Gaieté\n63360\nGerzat",
        ]);
        DB::table('members')->insert([
            'id' => 25,
            'last_name' => "CLAVELIER",
            'first_name' => "Maurice",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 rue Beaumarchais\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 26,
            'last_name' => "CLAVELIER BOUTINES",
            'first_name' => "Nicole",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 rue Beaumarchais\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 27,
            'last_name' => "CLEMENT",
            'first_name' => "Elisabeth",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "12 Cottage des Cézeaux\nrue des rivaux\n63170\nAubière",
        ]);
        DB::table('members')->insert([
            'id' => 28,
            'last_name' => "COLOMBEAU",
            'first_name' => "Michel",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "La Piscine 36 rue de Rabanesse\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 29,
            'last_name' => "COURTINE",
            'first_name' => "Nicole",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "20 rue Abbé de l´Epée\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 30,
            'last_name' => "DARPOUX",
            'first_name' => "Nicole",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "9 rue Vercingétorix\n63170\nPérignat les Sarliéves",
        ]);
        DB::table('members')->insert([
            'id' => 31,
            'last_name' => "De GOER",
            'first_name' => "Marie Madeleine",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "316 Chemin de Mur\n63115\nMur sur Allier",
        ]);
        DB::table('members')->insert([
            'id' => 32,
            'last_name' => "DEGEMARD",
            'first_name' => "Jocelyne",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "47 rue de l´Oradou\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 33,
            'last_name' => "DEKHLI",
            'first_name' => "Nora",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 Place des Gras\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 34,
            'last_name' => "DENIER",
            'first_name' => "Roger",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "36 Bd Côte Blatin\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 35,
            'last_name' => "DUFOUR",
            'first_name' => "Monique",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "16 Cours sablon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 36,
            'last_name' => "DUMAS",
            'first_name' => "Régine",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "10 rue des Gravins\n63170\nPérignat les Sarlièves",
        ]);
        DB::table('members')->insert([
            'id' => 37,
            'last_name' => "El Yamni",
            'first_name' => "Zohra",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "2 Impasse de la Paulette\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 38,
            'last_name' => "ESCAMEZ",
            'first_name' => "Didier",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "6 rue des Chapelles\n63700\nSt Eloy les Mines",
        ]);
        DB::table('members')->insert([
            'id' => 39,
            'last_name' => "ESCAMEZ",
            'first_name' => "Claudine",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Lieu dit La Crêche N°4\n03560\nServant",
        ]);
        DB::table('members')->insert([
            'id' => 40,
            'last_name' => "ESCARGUEL",
            'first_name' => "Robert\/Jacqueline",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "29 rue des Dômes\n63200\nRiom",
        ]);
        DB::table('members')->insert([
            'id' => 41,
            'last_name' => "GATIGNOL",
            'first_name' => "Yvette",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "67 Av Léon Blum\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 42,
            'last_name' => "GILBERTAS",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "5 rue Chateaubriand\n63120\nCourpière",
        ]);
        DB::table('members')->insert([
            'id' => 43,
            'last_name' => "GIRAUD",
            'first_name' => "Daniel",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "28 Route de St Genès\n63122\nSt Genes Champanelle",
        ]);
        DB::table('members')->insert([
            'id' => 44,
            'last_name' => "GRAND",
            'first_name' => "Alain",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "10 rue Jean Baptiste Corot\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 45,
            'last_name' => "GUIEZE",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 Impasse Jean Baptiste Romeuf\n63130\nRoyat",
        ]);
        DB::table('members')->insert([
            'id' => 46,
            'last_name' => "GUYOT",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "4 Chemin St Anne\n63730\nPlauzat",
        ]);
        DB::table('members')->insert([
            'id' => 47,
            'last_name' => "GUYOT",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "27 rue Philippe Lebon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 48,
            'last_name' => "HURFIN",
            'first_name' => "Virginie Jean Felix",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "La Coust\n23 Chemin du Char\n63140\nChatel Guyon",
        ]);
        DB::table('members')->insert([
            'id' => 49,
            'last_name' => "IMBAUD",
            'first_name' => "Jacques",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "35 rue des Courtiaux\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 50,
            'last_name' => "JACQUESON",
            'first_name' => "Michelle",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "9 rue Sully\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 51,
            'last_name' => "JOLY",
            'first_name' => "Daniel",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 rue de l´Echelon\n63119\nChateaugay",
        ]);
        DB::table('members')->insert([
            'id' => 52,
            'last_name' => "JOUVE",
            'first_name' => "Jean-Marie",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "10 Impasse des Chemerets\n63800\nCournond´Auvergne",
        ]);
        DB::table('members')->insert([
            'id' => 53,
            'last_name' => "LAGARDE",
            'first_name' => "Georges",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "39 rue Montcalm\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 54,
            'last_name' => "LAMADON",
            'first_name' => "Michelle",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "17 rue de la Foi\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 55,
            'last_name' => "LASCOLS",
            'first_name' => "Françoise",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "22 Av Vercingetorix\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 56,
            'last_name' => "MALLET",
            'first_name' => "Jean et Suzanne",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "29 Av des Cottages\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 57,
            'last_name' => "MANSAT",
            'first_name' => "Aline",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7 Place de Regensburg\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 58,
            'last_name' => "MAZE",
            'first_name' => "Monique",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "6 rue de Wailly\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 59,
            'last_name' => "MOLLET",
            'first_name' => "Anne Marie",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 rue Roger Astier\n63170\nAubière",
        ]);
        DB::table('members')->insert([
            'id' => 60,
            'last_name' => "OGEC Auvergne",
            'first_name' => "Jean-Baptiste de LA SALLE",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "14 rue Geodefroy de Bouillon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 61,
            'last_name' => "PHALIPPON",
            'first_name' => "Georges",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "40 Av Charras\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 62,
            'last_name' => "PIN",
            'first_name' => "Christian",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "33 rue de Cotepet\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 63,
            'last_name' => "POUGNET",
            'first_name' => "Pierre",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Lieu dit Esbelin Le Vernet Chameane\n63580\nVernet La Varenne",
        ]);
        DB::table('members')->insert([
            'id' => 64,
            'last_name' => "REBOISSON",
            'first_name' => "Gérard",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "72 Avenue des Thermes\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 65,
            'last_name' => "ROCHE",
            'first_name' => "Christian",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "41 rue Celestin Tourres\n63115\nMezel",
        ]);
        DB::table('members')->insert([
            'id' => 66,
            'last_name' => "SADOURNY",
            'first_name' => "Sarah",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Res Caroline Bat B 18 Av Voltaire\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 67,
            'last_name' => "SAUREL",
            'first_name' => "Pierre",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "6 rue de la Rodade\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 68,
            'last_name' => "SAUZEDE",
            'first_name' => "Henri",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "17 rue Marie Curie\n63960\nVeyre Monton",
        ]);
        DB::table('members')->insert([
            'id' => 69,
            'last_name' => "Solidaire\/BOISSON",
            'first_name' => "Pierre",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "5 Allée Racine\n63370\nLempdes",
        ]);
        DB::table('members')->insert([
            'id' => 70,
            'last_name' => "TELLIER",
            'first_name' => "Pascal",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "9 rue des Meuniers\n63170\nAubière",
        ]);
        DB::table('members')->insert([
            'id' => 71,
            'last_name' => "TERRASSE",
            'first_name' => "Thierry",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "13 Impasse de la Condamine\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 72,
            'last_name' => "TRIDON",
            'first_name' => "Arlette",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "9 rue Auguste Renan\n63110\nBeaumont",
        ]);
        DB::table('members')->insert([
            'id' => 73,
            'last_name' => "VEIL-BOULHOL",
            'first_name' => "Françoise",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "137 Route de Lachaux de Vins\n63270\nVic le Comte",
        ]);
        DB::table('members')->insert([
            'id' => 74,
            'last_name' => "VOISSET",
            'first_name' => "Nicole",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Argnat 1 route des Eaux\n63530\nSayat",
        ]);
        DB::table('members')->insert([
            'id' => 75,
            'last_name' => "OUVRY",
            'first_name' => "Alain",
            'email' => null,
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "11 rue Vermenouze\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 76,
            'last_name' => "MARQUES",
            'first_name' => "Sandra",
            'email' => "wkxwkxkiwi@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 77,
            'last_name' => "SERPE",
            'first_name' => "Olivier",
            'email' => "olivier.serpe@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 78,
            'last_name' => "ALDON",
            'first_name' => "Michelle",
            'email' => "mi.aldon@sfr.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\nMontpeyroux",
        ]);
        DB::table('members')->insert([
            'id' => 79,
            'last_name' => "ANDRIEUX",
            'first_name' => "Samy",
            'email' => "samy.andrieux@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 80,
            'last_name' => "CHARBONNIER",
            'first_name' => "Alexis",
            'email' => "brechons@outloo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 81,
            'last_name' => "CHASSIN",
            'first_name' => "Robert",
            'email' => "rchassin@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\nRoyat",
        ]);
        DB::table('members')->insert([
            'id' => 82,
            'last_name' => "COLOMBEAU 1",
            'first_name' => "Andrée",
            'email' => "ollange@",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 83,
            'last_name' => "CROCE",
            'first_name' => "Loris",
            'email' => "loris.croce@laposte.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 84,
            'last_name' => "FREULLE",
            'first_name' => "Laurence",
            'email' => "laur.freulle@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63670\nLe Cendre",
        ]);
        DB::table('members')->insert([
            'id' => 85,
            'last_name' => "JULIEN",
            'first_name' => "Stephanie",
            'email' => "julienstef.sj@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63100\n",
        ]);
        DB::table('members')->insert([
            'id' => 86,
            'last_name' => "LEJEAU",
            'first_name' => "Michel",
            'email' => "michel.lejeau@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 87,
            'last_name' => "MANIEZ",
            'first_name' => "Hugo",
            'email' => "maniez_h@msn.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\n",
        ]);
        DB::table('members')->insert([
            'id' => 88,
            'last_name' => "MAUCHET",
            'first_name' => "Louis",
            'email' => "mouchet.louis@hotmail.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 89,
            'last_name' => "MOUILLAUD",
            'first_name' => "Marine",
            'email' => "marine.mouillaud@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 90,
            'last_name' => "MUNYEMANZI",
            'first_name' => "Ivan",
            'email' => "munyemanzi@6matt.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\n",
        ]);
        DB::table('members')->insert([
            'id' => 91,
            'last_name' => "SCHEIBLING",
            'first_name' => "Anne",
            'email' => "anne.scheibling@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63222\n",
        ]);
        DB::table('members')->insert([
            'id' => 92,
            'last_name' => "SLAOUI",
            'first_name' => "Maryla",
            'email' => "maryla@centresocial.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63100\n",
        ]);
        DB::table('members')->insert([
            'id' => 93,
            'last_name' => "TOTH",
            'first_name' => "Thierry",
            'email' => "tim.l.encharteur@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "\n63000\n",
        ]);
        DB::table('members')->insert([
            'id' => 94,
            'last_name' => "FAURE",
            'first_name' => "Gérard",
            'email' => "p.faure@cgt-aura.org",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "25 rue Victor Basch\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 95,
            'last_name' => "KAUFMANN",
            'first_name' => "Carola",
            'email' => "xaphi@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "5 impasse de la Gravière\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 96,
            'last_name' => "LIGERON",
            'first_name' => "Nicole",
            'email' => "nicole.ligeron@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "6 rue de la Malodière\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 97,
            'last_name' => "MIALON",
            'first_name' => "Corinne",
            'email' => "cmialon@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "27 rue Philippe Lebon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 98,
            'last_name' => "MOUNTADEM",
            'first_name' => "Marwa",
            'email' => "elyamni.marwa@hotmail.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 Chemin de Malintrat  Epinet\n63360\nSt Beauzire",
        ]);
        DB::table('members')->insert([
            'id' => 99,
            'last_name' => "MOUTARDE",
            'first_name' => "Véronique",
            'email' => "veromoutarde@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "5 rue de la Forge\n63230\nBromont Lamothe",
        ]);
        DB::table('members')->insert([
            'id' => 100,
            'last_name' => "OUVRY",
            'first_name' => "Alain",
            'email' => "alain.ouvry@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "1 rue de Poterat\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 101,
            'last_name' => "PINEL",
            'first_name' => "Victorin",
            'email' => "victorin.pinel@protomail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "51 rue Etienne Dolet\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 102,
            'last_name' => "POULAIN",
            'first_name' => "Claude",
            'email' => "cfg.poulain@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "78 rue des Quatre Chemins\n63117\nChauriat",
        ]);
        DB::table('members')->insert([
            'id' => 103,
            'last_name' => "AIT LASHEN  1",
            'first_name' => " Bernadette           Brahim",
            'email' => "nade51@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "1 Ter rue Philippe Glangeaud\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 104,
            'last_name' => "Amis de l´Huma63",
            'first_name' => "",
            'email' => "ahumanite2@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "2 Bd Trudaine\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 105,
            'last_name' => "ANGLADE",
            'first_name' => "Arthur",
            'email' => "arthur.anglade63430@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "21 rue Côte Tronchont\n63430\n",
        ]);
        DB::table('members')->insert([
            'id' => 106,
            'last_name' => "BAUDRI",
            'first_name' => "Frederic",
            'email' => "moinsimple@hotmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 rue du Dr Ducher\n63200\n",
        ]);
        DB::table('members')->insert([
            'id' => 107,
            'last_name' => "BELCOUR",
            'first_name' => "Marie",
            'email' => "marie.belcour@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "18 rue dela Garde\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 108,
            'last_name' => "BELOUIN",
            'first_name' => "Marie Christine",
            'email' => "mariebelouin@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "2 rue du Puy de Dôme\n63430\nPont du Château",
        ]);
        DB::table('members')->insert([
            'id' => 109,
            'last_name' => "BESLE",
            'first_name' => "Jean-Michel",
            'email' => "jmbesle@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Les Mayets Fontfreyde 21 Impase des Mayets\n63122\nSt Genes Champanelle",
        ]);
        DB::table('members')->insert([
            'id' => 110,
            'last_name' => "BEURIER",
            'first_name' => "Bernadette",
            'email' => "nade51@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "1T T rue Philippe Glangeaud\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 111,
            'last_name' => "BIDET",
            'first_name' => "Alain",
            'email' => "albidet@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "13 rue des Beaumes\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 112,
            'last_name' => "BINET",
            'first_name' => "Geneviève",
            'email' => "binet.genevieve@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "190 rue de la Pradelle\n63000\n",
        ]);
        DB::table('members')->insert([
            'id' => 113,
            'last_name' => "BONNEFOY",
            'first_name' => "Nathalie",
            'email' => "nbonnefoy50@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "37 Bd Trudaine\n63000\n",
        ]);
        DB::table('members')->insert([
            'id' => 114,
            'last_name' => "BOUDOU",
            'first_name' => "Colette",
            'email' => "boudou.colette@free.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "13 rue des Ecoles\n63450\nSt  Amand Tallende",
        ]);
        DB::table('members')->insert([
            'id' => 115,
            'last_name' => "BREDEAU",
            'first_name' => "Lionel",
            'email' => "lioneldevic@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Longues 20 Lotis Les Rochers Bleus\n63270\nVic le Comte",
        ]);
        DB::table('members')->insert([
            'id' => 116,
            'last_name' => "CARUEL  ",
            'first_name' => "Naïk",
            'email' => "naik.caruel@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "40 Av Charras\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 117,
            'last_name' => "CAVALIER",
            'first_name' => "Anne Marie",
            'email' => "acavalier@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "52 Bd Lafayette\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 118,
            'last_name' => "CHABROL",
            'first_name' => "Jacky",
            'email' => "jacky.chabrol@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Fourgat\n63270\nManglieu",
        ]);
        DB::table('members')->insert([
            'id' => 119,
            'last_name' => "CHARRIERE",
            'first_name' => "Cécile",
            'email' => "cecile.charriere0919@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "16 rue de Cournon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 120,
            'last_name' => "CHILLARD",
            'first_name' => "Yves",
            'email' => "chily1@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "83 rue des Gardes\n63800\nCournond´Auvergne",
        ]);
        DB::table('members')->insert([
            'id' => 121,
            'last_name' => "CHOVIN          1",
            'first_name' => "Marc",
            'email' => "marc.chovin@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Lieu dit Les Plaines\n63160\nMontmorin",
        ]);
        DB::table('members')->insert([
            'id' => 122,
            'last_name' => "CLAIRET",
            'first_name' => "Jacqueline",
            'email' => "jacqueline.clairet@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "32 rue Ernest Renan\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 123,
            'last_name' => "COLLANGE     2",
            'first_name' => "Michhéle",
            'email' => "michelle.collange57@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "idem\n63160\nMontmorin",
        ]);
        DB::table('members')->insert([
            'id' => 124,
            'last_name' => "COMEAU",
            'first_name' => "Clara",
            'email' => "clara.comeau@hotmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "4 rue Pierre L(Hermite\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 125,
            'last_name' => "CORNELOUP",
            'first_name' => "Mathias",
            'email' => "mathias.corneloup@hotmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "rue de Jussat\n63670\nGergovie",
        ]);
        DB::table('members')->insert([
            'id' => 126,
            'last_name' => "CURINIER",
            'first_name' => "Georges",
            'email' => "artgc@free.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7 rue Torgues\n63370\n",
        ]);
        DB::table('members')->insert([
            'id' => 127,
            'last_name' => "DAVY ",
            'first_name' => "Evelyne",
            'email' => "ev.davy@laposte.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7 Place Regensburg\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 128,
            'last_name' => "DELAHAYE",
            'first_name' => "Marie Thérèse",
            'email' => "mt.delahaye@gmail.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7 Impasse Pasteur\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 129,
            'last_name' => "DUFRENE",
            'first_name' => "Carole",
            'email' => "caroledufrene6376@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "17 Av de la Chataignerie\n63122\n",
        ]);
        DB::table('members')->insert([
            'id' => 130,
            'last_name' => "DUGAY",
            'first_name' => "Michelle",
            'email' => "micheldugay@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "5 Impasse des Gidonnes\n63110\nBeaumont",
        ]);
        DB::table('members')->insert([
            'id' => 131,
            'last_name' => "DUIKER",
            'first_name' => "Hélène",
            'email' => "helene.duiker@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "156 Av de la Libération\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 132,
            'last_name' => "DUIKER",
            'first_name' => "Marc",
            'email' => "marc.duiker@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "La Valette\n63620\nValseleix",
        ]);
        DB::table('members')->insert([
            'id' => 133,
            'last_name' => "DUMOULIN",
            'first_name' => "Guy",
            'email' => "dumg@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "6 rue de la Malodière\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 134,
            'last_name' => "DURAND",
            'first_name' => "Geneviève",
            'email' => "ge.durand444@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 Allée Bel Air  Chantugue\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 135,
            'last_name' => "FERIOUD",
            'first_name' => "Luca",
            'email' => "lucas.ferioud@laposte.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "mêm adresse\n\n",
        ]);
        DB::table('members')->insert([
            'id' => 136,
            'last_name' => "FERSTLER",
            'first_name' => "Sabrina",
            'email' => "sabrina_ferstler@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "17 rue D´Aline\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 137,
            'last_name' => "FEVRE",
            'first_name' => "Christiane",
            'email' => "chrisfevre63@yahoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Res Les Peupliers 7 rue de la Papeterie\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 138,
            'last_name' => "GAUTHIER",
            'first_name' => "Jean",
            'email' => "jean.gauthier7@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "104 rue Lécuellé\n63100\n",
        ]);
        DB::table('members')->insert([
            'id' => 139,
            'last_name' => "GESSET",
            'first_name' => "Josephine",
            'email' => "josephinegesset104@icloud.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "52 Av Albert Elisabeth\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 140,
            'last_name' => "GRIFFON",
            'first_name' => "Bernard\/ Marie Jo",
            'email' => "griffon.b@laposte.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "20 route de St Bonnet\n63800\nPérignat sur Allier",
        ]);
        DB::table('members')->insert([
            'id' => 141,
            'last_name' => "GUERRIN",
            'first_name' => "Théo",
            'email' => "theo.guerrin@outlook.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "52 Av Albert Elisabeth\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 142,
            'last_name' => "HERBET",
            'first_name' => "Alain",
            'email' => "aherbet@neuf.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "28 rue de la Prugne\n63540\nRomagnat",
        ]);
        DB::table('members')->insert([
            'id' => 143,
            'last_name' => "HUMBERT",
            'first_name' => "Marie Noëlle",
            'email' => "marienoel.humbert@free.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "22 rue Raynaud\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 144,
            'last_name' => "LAURENS",
            'first_name' => "Christiane",
            'email' => "laurens.chris@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "La Source Vive 20 Av Jean Jaures\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 145,
            'last_name' => "LECLERC",
            'first_name' => "Martine",
            'email' => "martine.leclerc47@sfr.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "33 Av Joseph Claussat\n63400\nChamalières",
        ]);
        DB::table('members')->insert([
            'id' => 146,
            'last_name' => "LOSSOUARN",
            'first_name' => "Christiane",
            'email' => "elyamni.marwa@hotmail.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7 rue des Torgues\n63370\n",
        ]);
        DB::table('members')->insert([
            'id' => 147,
            'last_name' => "LUPERCE",
            'first_name' => "Colette",
            'email' => "collette.luperce@sfr.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "rue de Gauthier de Biauzat 16 D\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 148,
            'last_name' => "MAGE",
            'first_name' => "Damienne",
            'email' => "mage.damienne@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "13 B rue Jean Verny\n63360\nGerzat  ",
        ]);
        DB::table('members')->insert([
            'id' => 149,
            'last_name' => "MEYNIER",
            'first_name' => "Philippe",
            'email' => "phmeynier@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Résidence du Parc\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 150,
            'last_name' => "Mjo",
            'first_name' => "",
            'email' => "griffon.mj@laposte.net",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "",
        ]);
        DB::table('members')->insert([
            'id' => 151,
            'last_name' => "NEGRE",
            'first_name' => "Marie Thérése",
            'email' => "jeanclaude.negre@sfr.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "32 rue Marechal Delattre deTassigny\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 152,
            'last_name' => "PALLE",
            'first_name' => "David",
            'email' => "keithjars@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "15 Av du Puy de Dôme\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 153,
            'last_name' => "POTIER",
            'first_name' => "Françoise",
            'email' => "francoise-potier63@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "21 rue de Rochefeuille\n63360\nGerzat",
        ]);
        DB::table('members')->insert([
            'id' => 154,
            'last_name' => "PROPPER",
            'first_name' => "Catherine",
            'email' => "catherine.propper@orange.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "Sallèdes\n63270\nSallèdes",
        ]);
        DB::table('members')->insert([
            'id' => 155,
            'last_name' => "RAMET",
            'first_name' => "Jean Philippe",
            'email' => "jeanphilippera@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "3 rue Drelon\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 156,
            'last_name' => "RAYNAUD ",
            'first_name' => "Alain",
            'email' => "alain.raynaud@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "2 rue Pierre Curie\n63122\n Boissejour    CEYRAT",
        ]);
        DB::table('members')->insert([
            'id' => 157,
            'last_name' => "ROUSSEL",
            'first_name' => "Martine",
            'email' => "martine.roussel63@gmail.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "54 Bd Aristide Briand\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 158,
            'last_name' => "SERRES",
            'first_name' => "Christian",
            'email' => "serre.christian@sfr.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "61 rue Thevenot-Thibaud\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 159,
            'last_name' => "St JOANIS",
            'first_name' => "Marigil",
            'email' => "marie.saint-joanis@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "24 Av Vercingétorix\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 160,
            'last_name' => "TINAUGUS",
            'first_name' => "Daniel",
            'email' => "tinaugus.daniel@orange.com",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "7  rue des Gravouses\n63100\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 161,
            'last_name' => "TOURNADRE",
            'first_name' => "Jean-Michel",
            'email' => "jean-michel.tournadre@club-internet.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "37 A Route de Gravenoire\n63122\nCeyrat",
        ]);
        DB::table('members')->insert([
            'id' => 162,
            'last_name' => "VANDRAND",
            'first_name' => "Marie Joëlle",
            'email' => "mjvandran@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "37 rue de l´Oradou\n63000\nClermont-Ferrand",
        ]);
        DB::table('members')->insert([
            'id' => 163,
            'last_name' => "VEDRINE",
            'first_name' => "Isabelle",
            'email' => "isabelle.vedrine@wanadoo.fr",
            'value' => 15,
            'date' => "2022-09-01",
            'address' => "12 rue Pourcher\n63000\nClermont-Ferrand",
        ]);
    }
}
