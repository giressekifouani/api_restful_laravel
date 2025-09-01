<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->updateOrInsert(
            ['email' => 'jean.dupont@example.com'], // condition d’unicité
            [
                'prenom' => 'Dupont',
                'nom' => 'Jean',
                'sexe'=> 'masculin',
                'nationalite'=> 'Francais',
                'adresse'=> 'Dakar',
                'telephone'=> '77657093',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('personnes')->updateOrInsert(
            ['email' => 'marc.pierre@example.com'],
            [
                'prenom' => 'Pierre',
                'nom' => 'Marc',
                'sexe'=> 'masculin',
                'nationalite'=> 'Francais',
                'adresse'=> 'Dakar',
                'telephone'=> '77657093',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
