<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Products')->insert([
            [
                'name'=>'NIKE SHOE',
                "price"=>"10500",
                "description"=>"New nike Sneaker which make your leg more suitable ",
                "category"=>"SHOES",
                "gallery"=>"https://sportsstation.in/cdn/shop/products/court-vision-low-shoes-hGlBPT_800x.jpg?v=1681449918",
            ],
            [
                'name'=>'PUMA SHOE',
                "price"=>"8500",
                "description"=>"Step up your fashion game with these sleek and versatile athletic sneakers. Crafted with a blend of breathable mesh and durable synthetic materials, these sneakers offer both comfort and durability for all-day wear ",
                "category"=>"SHOES",
                "gallery"=>"https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/07010111/Puma-RS-X-Colourblocked-Sneakers-560x560.jpg" ],
            [
                'name'=>'Apple watch',
                "price"=>"90500",
                "description"=>"Track everything any time with apple watch ",
                "category"=>"watches",
                "gallery"=>"https://images.macrumors.com/t/c96sXgJ-lcz2Agp1EimXz2CwYMM=/800x0/smart/article-new/2022/09/apple-watch-ultra-1.jpg?lossy"
            ],
            [
                'name'=>'Apple Iphone 15 PRO MAX',
                "price"=>"150500",
                "description"=>"NEW IPHONE ",
                "category"=>"PHONES",
                "gallery"=>"https://www.apple.com/newsroom/images/2023/09/apple-debuts-iphone-15-and-iphone-15-plus/article/Apple-iPhone-15-lineup-hero-geo-230912_inline.jpg.large.jpg"
            ]
            
        ]);
    }
}
