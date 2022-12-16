<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $Data = [];
    public function index()
    {
        $this ->Data['title'] = 'Contact';
        return view('admin.contact',$this->Data);
    }
}
