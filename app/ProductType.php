<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    // khai báo bảng:
    protected $table = "type_products";
    // quan hệ một nhiều:
    public function product(){
    	return $this->hasMany('App\product','id_type','id') // đường dẫn , khóa ngoại, khóa chính 
    }
}
