<?php

namespace App\Http\Controllers\studying;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $Data =[];
    public function about()
    {
        $this->Data['title'] = 'About';
        return view('studying.about',$this->Data);
    }
}
