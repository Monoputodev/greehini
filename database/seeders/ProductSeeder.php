<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = [
            [
                'title' => 'Fresh Apples',
                'description' => 'Enjoy the crisp and sweet taste of freshly picked apples. Our apples are sourced from local orchards and are rich in flavor and nutrients.',
                'image' => 'fresh_apples.jpg',
                'product_category' => '1',
                'order' => 1,
            ],
            [
                'title' => 'Juicy Watermelons',
                'description' => 'Quench your thirst with our juicy and refreshing watermelons. Each slice is bursting with hydration and sweetness.',
                'image' => 'juicy_watermelons.jpg',
                'product_category' => '2',
                'order' => 2,
            ],
            [
                'title' => 'Organic Berries',
                'description' => 'Indulge in the natural sweetness of organic berries. Packed with antioxidants and vitamins, these berries are a delicious and healthy treat.',
                'image' => 'organic_berries.jpg',
                'product_category' => '3',
                'order' => 3,
            ],
        ];

        // Insert the fruits into the database
        Product::insert($fruits);
    }
}
