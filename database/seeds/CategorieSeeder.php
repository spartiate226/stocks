<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categorie::class)->create(['intitule'=>'informatique']);
        factory(Categorie::class)->create(['intitule'=>"Electronique"]);
        factory(Categorie::class)->create(['intitule'=>"Vetement"]);
        factory(Categorie::class)->create(['intitule'=>"Chaussure"]);
        factory(Categorie::class)->create(['intitule'=>"Autre"]);
    }
}
