<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\personne;
use Illuminate\Support\Facades\DB;

class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personne = DB::table('personnes')->first(); // récupère la première personne
        DB::table("Personnels")->updateOrInsert([
            'personne_id' => 4,
            'poste'=> 'Developpeur',
            'service'=> 'Informatique',
            'identification'=> 'ID002',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table("Personnels")->updateOrInsert([
            'personne_id' => $personne->id,
            'poste'=> 'Developpeur',
            'service'=> 'Informatique',
            'identification'=> 'ID003',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
