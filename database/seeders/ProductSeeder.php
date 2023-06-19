<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Coffee Mug',
                'slug' => 'coffee-mug',
                'category_id' => 5,
                'price' => 200,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Camera Lens',
                'slug' => 'camera-lens',
                'category_id' => 4,
                'price' => 30000,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Study Chair',
                'slug' => 'study-chair',
                'category_id' => 5,
                'price' => 6000,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Fax Machine',
                'slug' => 'fax-machine',
                'category_id' => 4,
                'price' => 4000,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Nike Sneaker',
                'slug' => 'nike-sneaker',
                'category_id' => 1,
                'price' => 9000,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Forever Spin',
                'slug' => 'forever-spin',
                'category_id' => 5,
                'price' => 700,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
            [
                'title' => 'Dice',
                'slug' => 'dice',
                'category_id' => 5,
                'price' => 700,
                'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi consequuntur eveniet ipsum quos reprehenderit.</p> <p>A accusamus adipisci aliquid animi autem dolores earum eius fugit illo impedit iusto laboriosam nam necessitatibus neque nostrum, nulla officiis pariatur, perspiciatis placeat quae quis quisquam rerum sed tenetur, velit vero voluptatibus! Incidunt, neque sed.</p>",
                'active' => true
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
