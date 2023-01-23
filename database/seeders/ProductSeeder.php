<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' =>'Tent' ,
                'details' =>'200x150x110cm' ,
                'description' =>'Water Proof Tent- Out Door Rain Cover Canopy Tents Outdoor Tent rain protector rain cover Silver Coating Anti UV Sun Shelter Waterproof Tent Outdoor' ,
                'brand' =>'Kim Brand' ,
                'price' =>1650 ,
                'shipping_cost' =>200 ,
                'image_path' =>'storage/Tent.jpg' 
            ],

            [
                'name' =>'Camper Tent' ,
                'details' =>'250x220x160cm' ,
                'description' =>'Double Layer Two Door 6-8 person Camping Large Tent Water Resistant' ,
                'brand' =>'Renn' ,
                'price' =>21950 ,
                'shipping_cost' =>500 ,
                'image_path' =>'storage/CamperTent.jpg' 
            ],

        ];

        foreach($products as $key => $value) {
            Product::create($value);
        }
    }
}
