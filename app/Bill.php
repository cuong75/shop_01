<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    // khai báo bảng:
    protected $table = "bills";
      public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
      public function bill(){
    	return $this->belongsTo('App\Customer','id_customer','id');
    }

}
