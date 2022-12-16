<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Requests\EditRequest;
use App\Models\Users ;
class HomeController extends Controller
{
    protected $Data = [];
    public function index()
    {
        $user = new Users ;
        $userList = $user->getAllUsers();
        $total = 0 ;
        $countCustomer = count($userList);
        for($i=0 ; $i<$countCustomer;$i++)
        {
            $total = $total + $userList[$i]->total_bill;
        }
        $this ->Data['title'] = 'Trang Chủ';
        return view('admin.home',compact('userList','total','countCustomer'),$this->Data);
    }

    public function postInfor(UserRequest $request)
    {
        $user = new Users;
        $data = [
            $request->id = count($user->getAllUsers()),$request->name,$request->bill,$request->phone,$request->address,$request->total_bill
        ];

        $user->addUsers($data);
        return redirect()->route('admin.home');
    }

    public function getDelete($id)
    {
        $user = new Users;
        $user->getDetail($id);
        $deleteUser = $user->deleteUsers($id);
        return redirect()->route('admin.home')->with('msg','Delete Successfully');
    }

    public function getEdit($id)
    {
        $user = new Users;
        $userDetail = $user->getDetail($id);
        $this->Data['title'] ='Sửa Thông Tin Khách Hàng';
        if(!empty($userDetail[0]))
        {
            $userDetail = $userDetail[0];
        }else{
            return redirect()->route('admin.home')->with('msg','User not exits');
        }
        return view('admin.form.edit',$this->Data,compact('userDetail'));
    }

    public function postEdit(EditRequest $request,$id){

        $data = [
            $request->name,$request->bill,$request->phone,$request->address,$request->total_bill
        ];
        $user = new Users ;
        $user->updateUsers($data,$id);
        return redirect()->route('admin.home')->with('msg','Update Successfully');
    }
}
