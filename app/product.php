<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'tbl_product';
    protected $fillable = ['category_id','brand_id','product_desc','product_content','product_price','product_image','product_image','product_name'];
    
}
