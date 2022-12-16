<?php

namespace App\Http\Controllers\studying;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $Data = [] ;
    public function show()
    {
        $this ->Data['condition'] = 5;
        $this ->Data['title'] ='Page Product';
        return view('studying/product',$this->Data);
    }
}
