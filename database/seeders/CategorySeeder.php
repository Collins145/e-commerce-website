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
        $categories = [
            [
                'title' => 'Shoes',
                'slug' => 'shoes',
                'description' => 'Men, women and children shoes. Buy now',
                'active' => true
            ],
            [
                'title' => 'Clothes',
                'slug' => 'clothes',
                'description' => 'Men, women and children clothes. Buy now',
                'active' => true
            ],
            [
                'title' => 'Bags',
                'slug' => 'bags',
                'description' => 'Men, women and children bags. Buy now',
                'active' => true
            ],
            [
                'title' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Home appliances and general electronics for your technology needs. Buy now',
                'active' => true
            ],
            [
                'title' => 'Household',
                'slug' => 'household',
                'description' => 'Household items for your home needs. Buy now',
                'active' => true
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
