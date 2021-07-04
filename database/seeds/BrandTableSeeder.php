<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_brand')->insert([
            ['brand_name' => 'Acer', 'brand_desc' => 'Acer'],
            ['brand_name' => 'Hp', 'brand_desc' => 'Hp'],
            ['brand_name' => 'Dell', 'brand_desc' => 'Dell'],
            ['brand_name' => 'Asus', 'brand_desc' => 'Asus'],
            ['brand_name' => 'Lenovo', 'brand_desc' => 'Lenovo'],
            ['brand_name' => 'MSI', 'brand_desc' => 'MSI'],
            ['brand_name' => 'Samsung', 'brand_desc' => 'Samsung'],
            ['brand_name' => 'Apple', 'brand_desc' => 'Apple']
            
        ]);
    }
}
