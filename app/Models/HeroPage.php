<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroPage extends Model
{
    
      protected $fillable=[
        'title','description','price','hero_image'
      ];
}
