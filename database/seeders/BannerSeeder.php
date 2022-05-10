<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'title' => 'Get The Latest App From App Stores',
            'p' => 'Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS
            layout provided by TemplateMo, a great website to download free CSS templates.',
            'quotelink1' => '#contact',
            'quotetext1' => 'Free Quote ',
            'quotelogo1' => 'fab fa-apple',
            'quotelink2' => '#contact',
            'quotetext2' => 'Free Quote ',
            'quotelogo2' => 'fab fa-google-play',
            'image' => 'assets/images/slider-dec.png'

        ]);
    }
}
