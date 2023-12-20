<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            [
                'id' => 1,
                'nom' => 'Keanu Reeves',
                'dateNaissance' => '2 Septembre 1964',
                'lieuNaissance' => 'Beyrouth, Liban',
                "type" => 'acteur',
                'photo' => 'Keanu_Reeves-655ba4ab6394c.jpg'
            ],
            [
                'id' => 2,
                'nom' => 'Laurence Fishburne',
                'dateNaissance' => '30 Juillet 1961',
                'lieuNaissance' => 'Augusta, États-Unis',
                "type" => 'acteur',
                'photo' => 'Laurence_Fishburne-655b9f4a212d8.jpg'
            ],
            [
                'id' => 3,
                'nom' => 'Arnold Schwarzenegger',
                'dateNaissance' => '30 juillet 1947 ',
                'lieuNaissance' => 'Thal, Autriche',
                "type" => 'acteur',
                'photo' => 'Arnold_Schwarzenegger-655b9fb376960.jpg'
            ],
            [
                'id' => 4,
                'nom' => 'Tom Cruise',
                'dateNaissance' => '3 juillet 1962',
                'lieuNaissance' => 'Syracuse, État de New York',
                "type" => 'acteur',
                'photo' => 'Tom_Cruise-655ba06fee3d8.jpg'
            ],
            [
                'id' => 5,
                'nom' => 'Vin Diesel',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'acteur',
                'photo' => 'Vin_Diesel-655ba128030fc.jpg'
            ],
            [
                'id' => 6,
                'nom' => 'Nicolas Cage',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'acteur',
                'photo' => 'Nicolas_Cage-655ba1b3b0091.jpg'
            ],
            [
                'id' => 7,
                'nom' => 'Chad Stahelski',
                'dateNaissance' => '20 septembre 1968',
                'lieuNaissance' => 'Fort Worth, Texas',
                "type" => 'realisateur',
                'photo' => 'Chad_Stahelski-65833d72ebae3.jpg'
            ],
            [
                'id' => 8,
                'nom' => 'Christopher McQuarrie',
                'dateNaissance' => '31 mai 1968',
                'lieuNaissance' => 'Princeton, New Jersey',
                "type" => 'realisateur',
                'photo' => 'Christopher_McQuarrie-65833e415567b.jpg'
            ],
            [
                'id' => 9,
                'nom' => 'Robert Cohen',
                'dateNaissance' => '12 mars 1949',
                'lieuNaissance' => 'Cornwall, État de New York',
                "type" => 'realisateur',
                'photo' => 'Robert_Cohen-65833f03ef559.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Chris McKay',
                'dateNaissance' => '11 novembre 1973',
                'lieuNaissance' => 'Winter Park',
                "type" => 'realisateur',
                'photo' => 'Chris_McKay-65833f93f1235.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'Patrick Wilson',
                'dateNaissance' => '3 juillet 1973',
                'lieuNaissance' => 'Norfolk ',
                "type" => 'realisateur',
                'photo' => 'Patrick_Wilson-6583404a7c2af.jpg'
            ],
            [
                'id' => 12,
                'nom' => 'Matt Bettinelli-Olpin',
                'dateNaissance' => '19 février 1978',
                'lieuNaissance' => 'Californie',
                "type" => 'realisateur',
                'photo' => 'Matt_Bettinelli-Olpin-658340bda4ffa.jpg'
            ],
            [
                'id' => 13,
                'nom' => 'Francis Ford Coppola',
                'dateNaissance' => '7 avril 1939',
                'lieuNaissance' => 'Détroit, Michigan',
                "type" => 'produceur',
                'photo' => 'Francis_Ford_Coppola-65834907d6ef9.jpg'
            ],
            [
                'id' => 14,
                'nom' => 'Gale_Anne_Hurd',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Los Angeles (Californie)',
                "type" => 'produceur',
                'photo' => 'Gale_Anne_Hurd-6583487660334.jpg'
            ],
            [
                'id' => 15,
                'nom' => 'George Lucas',
                'dateNaissance' => '14 mai 1944',
                'lieuNaissance' => 'Modesto, Californie',
                "type" => 'produceur',
                'photo' => 'George_Lucas-6583496de1b3f.jpg'
            ],
            [
                'id' => 16,
                'nom' => 'Kathleen Kennedy',
                'dateNaissance' => '5 juin 1953',
                'lieuNaissance' => 'Berkeley, Californie',
                "type" => 'produceur',
                'photo' => 'Kathleen_Kennedy-65834a223b598.jpg'
            ],
            [
                'id' => 17,
                'nom' => 'Phoebe Waller-Bridge',
                'dateNaissance' => '14 juillet 1985',
                'lieuNaissance' => 'Londres, Angleterre',
                "type" => 'produceur',
                'photo' => 'Phoebe_Waller-Bridge-65834aeec6a4c.png'
            ],
            [
                'id' => 18,
                'nom' => 'Joel Silver',
                'dateNaissance' => '14 juillet 1952',
                'lieuNaissance' => 'South Orange, New Jersey',
                "type" => 'produceur',
                'photo' => 'Joel_Silver-65834b9a4c95e.jpg'
            ],
        ]);
    }
}
