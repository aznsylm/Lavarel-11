<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create()

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);
        Category::create([
            'name' => 'Algoritma Pemrograman',
            'slug' => 'algoritma-pemrograman'
        ]);
        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure'
        ]);
        Category::create([
            'name' => 'Operation System',
            'slug' => 'operation-system'
        ]);
        Category::create([
            'name' => 'Software Enggineer',
            'slug' => 'software-enggineer'
        ]);

    }
}
