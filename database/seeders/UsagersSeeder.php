<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'nom' => 'admin',
                'nomUsager' => 'admin',
                'prenom'  => 'admin',
                'email' => 'admin@gmail.com',
                "role" => 'admin',
                'password'  => Hash::make('admin')
            ],
            [
                'id' => 2,
                'nom' => 'normal',
                'nomUsager' => 'normal',
                'prenom'  => 'normal',
                'email' => 'normal@gmail.com',
                "role" => 'normal',
                'password'  =>  Hash::make('normal')
            ],
            [
                'id' => 3,
                'nom' => 'enfant',
                'nomUsager' => 'enfant',
                'prenom'  => 'enfant',
                'email' => 'enfant@gmail.com',
                "role" => 'enfant',
                'password'  =>  Hash::make('enfant')
            ],
        ]);
    }
}
