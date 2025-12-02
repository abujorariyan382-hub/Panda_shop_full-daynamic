<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPage extends Model
{
    
      protected $fillable=[
        'title','description','catagory','quantity','price','discount_price','product_image'
      ];
}
