<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Create some sample fruit categories for a fruit-related website
        $fruitCategories = [
            [
                'title' => 'Fresh Fruits',
                'description' => 'Discover a wide variety of fresh fruits, handpicked for their quality and taste.',
                'image' => 'fresh_fruits.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Exotic Fruits',
                'description' => 'Experience the exotic flavors of unique and rare fruits from around the world.',
                'image' => 'exotic_fruits.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Organic Fruits',
                'description' => 'Enjoy the goodness of organic fruits, grown without harmful chemicals or pesticides.',
                'image' => 'organic_fruits.jpg',
                'order' => 3,
            ],
        ];

        // Insert the fruit categories into the database
        Service::insert($fruitCategories);
    }
}
