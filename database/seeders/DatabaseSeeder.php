<?php

namespace Database\Seeders;

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

        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            ContentSeeder::class,
            BlogSeeder::class,
            ProductSeeder::class,
            HeroSeeder::class,
            TeamSeeder::class,
            FaqSeeder::class,
            TestimonialSeeder::class
        ]);
    }
}
