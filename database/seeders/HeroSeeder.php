<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                'title' => 'Fresh and Juicy Fruits',
                'subtitle' => 'Discover the Best of Nature',
                'image' => 'fruits_hero1.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Nutritious and Delicious Recipes',
                'subtitle' => 'Savor the Flavors of Nature',
                'image' => 'fruits_hero2.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Promoting a Healthy Lifestyle',
                'subtitle' => 'Nourish Your Body with Nature\'s Bounty',
                'image' => 'fruits_hero3.jpg',
                'order' => 3,
            ],
        ]);
    }
}
