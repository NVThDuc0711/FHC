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
    public function index(Request $request)
    {
        $user = new Users ;
        $filters_1 =null;
        $filters_2 = null;

        if(!empty($request->total_bill_larger)){
            $bill = $request->total_bill_larger;
            $filters_1 =$bill;
        }
        if(!empty($request->total_bill_less)){
            $bill = $request->total_bill_less;
            $filters_2 =$bill;
        }

        $userList = $user->getAllUsers($filters_1, $filters_2);
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
            $request->id = count($user->getAllUsers()),
            $request->name,
            $request->bill,
            $request->phone,
            $request->address,
            $request->total_bill,
            $request->create_at
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
            $request->name,$request->bill,$request->phone,$request->address,$request->total_bill,$request->create_at
        ];
        $user = new Users ;
        $user->updateUsers($data,$id);
        return redirect()->route('admin.home')->with('msg','Update Successfully');
    }
}
