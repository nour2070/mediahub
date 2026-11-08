<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Publication;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $cat1 = Categorie::create(['nom' => 'Vidéo', 'slug' => 'video']);
        $cat2 = Categorie::create(['nom' => 'Audio', 'slug' => 'audio']);

        Publication::create([
            'titre' => 'Vidéo éducative',
            'contenu' => 'Explication des bases de Laravel',
            'categorie_id' => $cat1->id
        ]);

        Publication::create([
            'titre' => 'Podcast technologique',
            'contenu' => 'Les dernières tendances du web',
            'categorie_id' => $cat2->id
        ]);
    }
}