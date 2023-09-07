<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'website_name' => 'Fresh Fruits Paradise',
            'website_description' => 'Welcome to Fresh Fruits Paradise, your ultimate source for everything related to fresh and delicious fruits. We are dedicated to providing valuable information about various fruits, their health benefits, and tasty recipes to try at home. Our mission is to inspire healthy living and encourage the consumption of fresh, natural produce for a nutritious lifestyle.',
            'website_logo' => 'fruits_paradise_logo.png',
            'banner_1' => 'fruits_paradise_logo.png',
            'banner_2' => 'fruits_paradise_logo.png',
            'website_favicon' => 'fruits_paradise_favicon.png',
            'website_email' => 'info@freshfruitsparadise.com',
            'website_phone' => '+1 (123) 456-7890',
            'website_address' => '789 Orchard Street, Suite 123, Fruitville, State 45678',
            'about_content' => 'At Fresh Fruits Paradise, we are passionate about fruits and their role in promoting overall well-being. Our platform aims to educate and inform our audience about the diverse range of fruits available, their nutritional value, and how to incorporate them into everyday meals. Whether you\'re a fruit enthusiast or someone looking to improve your diet, our team is here to guide you on your fruit-filled journey.',
            'about_image' => 'fruits_paradise_about.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
