<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('products')->insert([
            [ 
                'name'=>'iPhone SE',
                "price"=>"70000",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/812JKRJ1nZL._AC_SL1500_.jpg",
                "description"=>"A smartphone produced by Apple"
            ],
            [
                'name'=>'Samsung S20 FE',
                "price"=>"50000",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/71RxOftVoQL._AC_SL1500_.jpg",
                "description"=>"A smartphone produced by Samsung"
            ],
            [
                'name'=>'Moto G Power',
                "price"=>"18000",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/I/61jKxwxAZFL._AC_SL1500_.jpg",
                "description"=>"A smartphone produced by Motorola"
            ]
        ]
    );
       
    }
}
