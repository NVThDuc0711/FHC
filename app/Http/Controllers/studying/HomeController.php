<?php

namespace App\Http\Controllers\studying;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use DB ;
class HomeController extends Controller
{
    public $Data = [];

    public function home()
    {
        $this->Data['admin'] = DB::select('select * from admin');
        $this->Data['message']="Hello";
        $this->Data['title'] = "Home Page";
        return view('studying/home',$this->Data);
    }
    public function show()
    {
        return view('studying/form');
    }
    public function testMethodPost(LoginRequest $request)
    {

        $allData = $request->all();

        $name = $request -> Name;
        $ip = $request->ip();
        $path = $request->path();
        $url = $request ->url();
        $Address = $request ->Address ;
        $file = $request->file('File');
        echo 'Hello '. $name .'<br>'.'Address IP : '.$ip.'<br>';
        echo 'Address : '.$Address.'<br>';
        if($request->file('File')){
            if ($request->file('File')->isValid()) {
                $path = $request->File->path();

                $extension = $request->File->extension();
                echo $path.'<br>'.$extension;
                $store = $file->storeAs('images','Destructor.jpg');
                if($store==true)
                {
                    echo 'Upload file successful';
                }
                else
                {
                    echo 'Upload file Failed';
                }
                dd($file);
            }
        }
        else{
            echo 'File Error';
        }

    }

}
