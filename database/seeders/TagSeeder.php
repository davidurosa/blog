<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'fotos',
            'slug'=> Str::slug('fotos'),
            'color'=> 'red'
        ]);

        Tag::create([
            'name' => 'playa',
            'slug'=> Str::slug('playa'),
            'color'=> 'blue'
        ]);

        Tag::create([
            'name' => 'Montaña',
            'slug'=> Str::slug('Montaña'),
            'color'=> 'green'
        ]);
    }
}
