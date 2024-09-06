<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Str;
use Hash;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Ganteng User',
        //     'email' => 'ganteng@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Development',
        //     'slug' => 'web-development'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'web-development',
        //     'body' => 'You may also seed your database using the migrate:fresh command in combination with the --seed option, which will drop all tables and re-run all of your migrations. This command is useful for completely re-building your database. The --seeder option may be used to specify a specific seeder to run:'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(25)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
