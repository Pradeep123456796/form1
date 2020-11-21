<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/*use App\category;*/

class Product extends Model
{
    protected $table = "product_type";
   

    protected $fillable  = ['cat_id','product_image','product_name'];

     public $timestamps=false;
	 public static function getproduct(){

	 	 $records =  DB::table('product_type')->select('id','cat_id','product_image','product_name')->get()->toArray();
	 	return $records;
	 }
     /*public function category(){
     	return  hasMany(Category::class);

     }
*/
}
