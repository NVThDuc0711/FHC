<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $Data = [];
    public function index()
    {
        $this ->Data['title'] = 'About Us';
        return view('admin.about',$this->Data);
    }
}
