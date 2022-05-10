<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "poster_name_big" => 'David Martino Co',
            "date" => '30 November 2021',
            "category" => 'Financial Apps',
            'rating' => 4.8,
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'headshot' => 'client-image.jpg',
            'poster_name_small' => 'David Martino',
            'poster_title' => 'CEO of David Company'
        ]);
        DB::table('testimonials')->insert([
            "poster_name_big" => 'Jake Harris Nyo',
            "date" => '29 November 2021',
            "category" => 'Digital Business',
            'rating' => 4.5,
            'quote' => '“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'headshot' => 'client-image.jpg',
            'poster_name_small' => 'Jake H. Nyo',
            'poster_title' => 'CTO of Digital Company'
        ]);
        DB::table('testimonials')->insert([
            "poster_name_big" => 'May Catherina',
            "date" => '27 November 2021',
            "category" => 'Business &amp; Economics',
            'rating' => 4.7,
            'quote' => '“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'headshot' => "client-image.jpg",
            'poster_name_small' => 'May C.',
            'poster_title' => 'Founder of Catherina Co.'
        ]);
        DB::table('testimonials')->insert([
            "poster_name_big" => 'Random User',
            "date" => '24 November 2021',
            "category" => 'New App Ecosystem',
            'rating' => 3.9,
            'quote' => '“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'headshot' => 'client-image.jpg',
            'poster_name_small' => 'Random Staff',
            'poster_title' => 'Manager, Digital Company'
        ]);
        DB::table('testimonials')->insert([
            "poster_name_big" => 'Mark Amber Do',
            "date" => '21 November 2021',
            "category" => 'Web Development',
            'rating' => 4.3,
            'quote' => '“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”',
            'headshot' => "client-image.jpg",
            'poster_name_small' => 'Mark Am',
            'poster_title' => 'CTO, Amber Do Company'
        ]);
    }
}
