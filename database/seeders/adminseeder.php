<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'admin',
            "email"=>"admin@mts.com",
            "password"=>bcrypt('admin123'),
        ]);
    }
}
