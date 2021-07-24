<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ORM
//        Category::create([
//            'name' => 'Category one',
//            'slug' => 'category-one',
//            'status' => 'draft',
//        ]);

        // Query Builder
        for ($i = 1; $i <= 20; $i++) {
            DB::table('categories')->insert([
                'name' => 'Category ' . $i,
                'slug' => 'category-' . $i,
                'status' => 'active',
            ]);
        }
    }
}
