<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
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
    //  $user =   User::factory()->create([
    //       'name' => 'Jhon Doe'
    //    ]);

      // Post::factory(1)->create();
       //Comment::factory(1)->create();
    //    Post::factory(5)->create([
    //          'user_id' => $user->id
    //      ]);
          Category::factory(1)->create();
      //  User::truncate();
      //  Post::truncate();
      //  Category::truncate();

    //   $user = User::factory()->create();

    //    $personal=  Category::create([
    //        'name' => 'personal',
    //        'slug' => 'personal'
    //     ]);

    //    $family =  Category::create([
    //         'name' => 'family',
    //         'slug' => 'family'
    //      ]);
    //    $work =  Category::create([
    //         'name' => 'work',
    //         'slug' => 'work'
    //      ]);

    //   //   \App\Models\User::factory(10)->create();

    //   Post::create([
    //       'user_id' => $user->id,
    //        'category_id' => $family->id,
    //         'title' => 'My family Post',
    //          'slug' => 'my-first-post',
    //          'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
    //          'body' => '<p>You can specify how many words should be generated right next to the word</p>',

    //   ]);
    //   Post::create([
    //     'user_id' => $user->id,
    //      'category_id' => $work->id,
    //       'title' => 'My work Post',
    //        'slug' => 'my-work-post',
    //        'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
    //        'body' => '<p>You can specify how many words should be generated right next to the word</p>',

    // ]);
    }
}
