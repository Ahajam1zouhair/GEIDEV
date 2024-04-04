<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filieres')->insert([
            [
                'pole' => 'digital',
                'name_filiere' => 'développement',
            ],
            [
                'pole' => 'digital',
                'name_filiere' => 'infrastructure',
            ],
        ]);
    }
}
