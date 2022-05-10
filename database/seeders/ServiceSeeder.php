<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'App Maintenance',
            'description' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'href_link' => '#',
            'href_text' => 'Read More',
            'href_logo' => 'fa fa-arrow-right'
        ]);
        DB::table('services')->insert([
            'title' => 'Rocket Speed of App',
            'description' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'href_link' => '#',
            'href_text' => 'Read More',
            'href_logo' => 'fa fa-arrow-right'
        ]);
        DB::table('services')->insert([
            'title' => 'Multi Workflow Idea',
            'description' => 'If this template is beneficial for your work, please support us',
            'href_link' => '#',
            'href_text' => 'Read More',
            'href_logo' => 'fa fa-arrow-right'
        ]);
        DB::table('services')->insert([
            'title' => '24/7 Help &amp; Support',
            'description' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion
            axe.',
            'href_link' => '#',
            'href_text' => 'Read More',
            'href_logo' => 'fa fa-arrow-right'
        ]);


    }
}
