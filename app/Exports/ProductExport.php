<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection,WithHeadings
{

	public function headings():array{
      return[
           'id',
           'cat_id',
            'product_image',
           'product_name' 
      ];
  
	}
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Product::all();
        return   collect(Product::getproduct());
    }
}
