<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $table = 'products';
   protected $fillable = ['category_title','title','category','short_description','feature_image','price','discounted_price','review','specific_description','long_description','each_feature_product','discounted_percentage'];

}
