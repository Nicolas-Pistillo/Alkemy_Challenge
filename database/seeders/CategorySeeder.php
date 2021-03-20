<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Videojuegos'
        ]);

        Category::create([
            'name' => 'Musica'
        ]);

        Category::create([
            'name' => 'Deportes'
        ]);

        Category::create([
            'name' => 'Accion'
        ]);

        Category::create([
            'name' => 'Educacion'
        ]);

        Category::create([
            'name' => 'Cultura'
        ]);

        Category::create([
            'name' => 'Peliculas'
        ]);
    }
}
