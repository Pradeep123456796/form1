<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*use App\Product;*/

class category extends Model
{
    protected $table = "product_category";
    use HasFactory;
     public $timestamps=false;

      function getproducts(){
     	return $this->hasMany('App\Models\Product');
     }

}
