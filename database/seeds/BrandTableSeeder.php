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
        // DB::table('tbl_brand')->insert([
        //     ['brand_name' => 'Acer', 'brand_desc' => 'Acer', 'brand_image' => 'noibatacer.jpg'],
        //     ['brand_name' => 'Hp', 'brand_desc' => 'Hp', 'brand_image' => 'noibathp.jpg'],
        //     ['brand_name' => 'Dell', 'brand_desc' => 'Dell', 'brand_image' => 'noibatdell.jpg'],
        //     ['brand_name' => 'Asus', 'brand_desc' => 'Asus', 'brand_image' => 'noibatasus.jpg'],
        //     ['brand_name' => 'Lenovo', 'brand_desc' => 'Lenovo', 'brand_image' => 'noibatlenovo.jpg'],
        //     ['brand_name' => 'MSI', 'brand_desc' => 'MSI', 'brand_image' => 'noibatmsi.jpg'],
        //     ['brand_name' => 'Apple', 'brand_desc' => 'Apple', 'brand_image' => 'noibatapple.jpg']
            
        // ]);

        DB::statement(
            "INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_image`, `created_at`, `updated_at`) VALUES
                (1, 'Acer', 'Acer', 'jpg91.jpg', NULL, NULL),
                (2, 'Asus', 'Asus', 'jpg53.jpg', NULL, NULL),
                (4, 'Apple', 'Apple', 'jpg76.jpg', NULL, NULL),
                (10, 'Dell', 'Dell', 'jpg58.jpg', NULL, NULL),
                (11, 'Lenovo', 'Lenovo', 'jpg43.jpg', NULL, NULL),
                (12, 'Hp', 'Hp', 'jpg61.jpg', NULL, NULL),
                (13, 'MSI', 'MSI', 'jpg44.jpg', NULL, NULL),
                (14, 'LG', 'LG', 'jpg1.jpg', NULL, NULL);");
    }
}
