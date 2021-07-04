<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_category_product')->insert([
            ['category_name' => 'Laptop', 'category_desc' => 'Laptop'],
            ['category_name' => 'Phụ kiện laptop', 'category_desc' => 'Phụ kiện laptop']
        ]);
    }
}
