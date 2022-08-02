<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = Post::factory(100)->create();

        foreach($posts as $post){

           /*  Image::factory(200)->create([
                'imageable_id'=> $post->id,
                'imageable_type'=> Post::class
            ]); */

            $post->tags()->attach([
                rand(1,2),
                rand(1,2)
            ]);

        }

    }
}
