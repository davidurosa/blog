<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Deportes',
            'slug'=> Str::slug('Depoertes')
        ]);

        Category::create([
            'name' => 'Artes',
            'slug'=> Str::slug('Artes')
        ]);
    }
}
