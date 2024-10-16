<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Seed some categories
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'News']);
        Category::create(['name' => 'Computer Science']);
    }
}
