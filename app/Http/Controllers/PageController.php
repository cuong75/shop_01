<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // tạo function :
    public function getIndex(){
    	return view('page.trangchu');
    }
}
