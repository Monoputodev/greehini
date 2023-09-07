<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'What areas of law do you specialize in?',
                'answer' => 'At Smith & Associates Law Firm, we specialize in various areas of law, including corporate law, personal injury, family law, real estate, and more.',
                'order' => 1,
            ],
            [
                'question' => 'How can I schedule a consultation?',
                'answer' => 'To schedule a consultation with one of our experienced attorneys, you can call us at +1 (123) 456-7890 or email us at info@smithandassociateslaw.com.',
                'order' => 2,
            ],
            [
                'question' => 'What sets your law firm apart?',
                'answer' => 'At Smith & Associates, we pride ourselves on providing personalized attention to each client, a deep understanding of the law, and a track record of successful outcomes in our cases.',
                'order' => 3,
            ],
            [
                'question' => 'Do you offer contingency fees for personal injury cases?',
                'answer' => 'Yes, we offer contingency fees for personal injury cases, which means you only pay if we successfully recover compensation for you.',
                'order' => 4,
            ],
            [
                'question' => 'Are virtual consultations available?',
                'answer' => 'Yes, we offer virtual consultations for clients who prefer to meet with us remotely.',
                'order' => 5,
            ],
        ]);
    }
}
