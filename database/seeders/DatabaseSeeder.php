<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::truncate();
        User::truncate();
        Category::truncate();


        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family post',
            'slug' => 'my-first-post',
            'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, soluta labore mollitia totam veniam earum architecto quam quasi, beatae doloremque animi? Maiores, doloribus tempore. Laboriosam, ab! Voluptatibus porro quo facere.",
            'body' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta similique placeat, ut corrupti, necessitatibus eaque itaque labore facere blanditiis veritatis beatae, illo autem vel eveniet corporis id pariatur consectetur! Pariatur repellendus nam eum, iusto enim quo libero molestias tenetur, blanditiis veniam voluptatem corporis aspernatur, soluta voluptatum inventore et neque rem? Voluptas aperiam tenetur modi? Alias vel, amet facere atque cum commodi quaerat modi soluta cupiditate? Minus quisquam facere odit ducimus maxime assumenda tempore libero eaque illo doloremque asperiores, in aliquam ipsam eligendi hic excepturi dignissimos ratione rem dolorem eius atque incidunt expedita officiis! Laboriosam aliquid sequi animi amet dolor!"
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-second-post',
            'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, soluta labore mollitia totam veniam earum architecto quam quasi, beatae doloremque animi? Maiores, doloribus tempore. Laboriosam, ab! Voluptatibus porro quo facere.",
            'body' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta similique placeat, ut corrupti, necessitatibus eaque itaque labore facere blanditiis veritatis beatae, illo autem vel eveniet corporis id pariatur consectetur! Pariatur repellendus nam eum, iusto enim quo libero molestias tenetur, blanditiis veniam voluptatem corporis aspernatur, soluta voluptatum inventore et neque rem? Voluptas aperiam tenetur modi? Alias vel, amet facere atque cum commodi quaerat modi soluta cupiditate? Minus quisquam facere odit ducimus maxime assumenda tempore libero eaque illo doloremque asperiores, in aliquam ipsam eligendi hic excepturi dignissimos ratione rem dolorem eius atque incidunt expedita officiis! Laboriosam aliquid sequi animi amet dolor!"
        ]);


    }
}
