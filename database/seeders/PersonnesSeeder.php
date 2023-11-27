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
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 8,
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 9,
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 12,
                'nom' => 'test',
                'dateNaissance' => '7 janvier 1964',
                'lieuNaissance' => 'Long Beach, Californie',
                "type" => 'realisateur',
                'photo' => 'https://cdn.britannica.com/64/135864-050-57268027/Nicolas-Cage-2009.jpg'
            ],
            [
                'id' => 13,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
            [
                'id' => 14,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
            [
                'id' => 15,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
            [
                'id' => 16,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
            [
                'id' => 17,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
            [
                'id' => 18,
                'nom' => 'producteur',
                'dateNaissance' => '18 juillet 1967',
                'lieuNaissance' => 'Alameda, Californie',
                "type" => 'producteur',
                'photo' => 'https://imgs.search.brave.com/fm6ylgK2_LCP6wlPhxE3Rb0HH-Pr5c0IZpqXL9BcbOQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtaW4uYm1zY2Ru/LmNvbS9pZWRiL2Fy/dGlzdC9pbWFnZXMv/d2Vic2l0ZS9wb3N0/ZXIvbGFyZ2Uvdmlu/LWRpZXNlbC01MDA3/LTIyLTEyLTIwMTct/MTAtMTctMjMuanBn'
            ],
        ]);
    }
}
