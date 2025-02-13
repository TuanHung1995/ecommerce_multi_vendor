<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $bannerOne = 
        DB::table('advertisements')->insert([
            [
                'key' => 'homepage_secion_banner_one',
                'value' => json_encode($value = [
                    'banner_one' => [
                        'banner_url' => 'http://ecommerce.test/',
                        'status' => 1,
                        'banner_image' => 'asjfndjk'
                    ]
                ])
            ],
            // [
            //     'key' => 'homepage_secion_banner_two',
            //     'value' => 'https://via.placeholder.com/728x90.png',
            //     'status' => 1,
            // ],
            // [
            //     'key' => 'homepage_secion_banner_three',
            //     'value' => 'https://via.placeholder.com/728x90.png',
            //     'status' => 1,
            // ],
            // [
            //     'key' => 'homepage_secion_banner_four',
            //     'value' => 'https://via.placeholder.com/728x90.png',
            //     'status' => 1,
            // ],
            // [
            //     'key' => 'cart_page_banner',
            //     'value' => 'https://via.placeholder.com/728x90.png',
            //     'status' => 1,
            // ],
            // [
            //     'key' => 'product_page_banner',
            //     'value' => 'https://via.placeholder.com/300x600.png',
            //     'status' => 1,
            // ]
        ]);
    }
}
