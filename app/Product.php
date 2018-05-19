<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // khai báo bảng:
    protected $table = "products";
    // đối với quan hệ 1-1 ( thiết lập quan hệ:)
    public function product_type(){
    	return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }
}
