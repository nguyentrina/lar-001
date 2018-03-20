<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Products extends Model
{

    public function category(){
        return $this->hasOne('App\Products_categories','id','product_category');
    }
    public function productsJoinCategories(){
        return $this->join('products_categories','products.product_category','=','products_categories.id')->get();
    }
}
