<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsPersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personnes')->insert([
            [
                'film_id' => 1,
                'personne_id' => 1,
            ],
            [
                'film_id' => 1,
                'personne_id' => 2,
            ],
            [
                'film_id' => 2,
                'personne_id' => 1,
            ],
            [
                'film_id' => 2,
                'personne_id' => 2,
            ]
        ]);
        }
}
