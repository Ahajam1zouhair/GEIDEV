<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Filieres;

class GroupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assurez-vous que FilieresTableSeeder soit exécuté en premier
        $devFiliere = Filieres::where('name_filiere', 'développement')->first();
        $infraFiliere = Filieres::where('name_filiere', 'infrastructure')->first();

        $groupes = [
            ['name_groupes' => 'dev101', 'niveau' => '1ère année', 'filiere_id' => $devFiliere->id],
            ['name_groupes' => 'dev102', 'niveau' => '1ère année', 'filiere_id' => $devFiliere->id],
            ['name_groupes' => 'devofs', 'niveau' => '2ème année', 'filiere_id' => $devFiliere->id],
            ['name_groupes' => 'devam', 'niveau' => '2ème année', 'filiere_id' => $devFiliere->id],
            ['name_groupes' => 'inf1', 'niveau' => '1ère année',  'filiere_id' => $infraFiliere->id],
            ['name_groupes' => 'inf2', 'niveau' => '1ère année', 'filiere_id' => $infraFiliere->id],
        ];

        DB::table('groupes')->insert($groupes);
    }
}
