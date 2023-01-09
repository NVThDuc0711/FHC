<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users ;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Collection;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    protected $Data = [];
    public function index(Request $request)
    {
        $this ->Data['title'] = 'Sản Phẩm';
        $products = new Users;
        $filters =[];
        if(!empty($request->family))
        {
            $family = $request->family;
            $filters[]=['product.family','like',$family];
        }
        $ListProducts = $products->getAllProducts($filters);

        $countProducts = count($products->getAllProducts());
        $total = 0 ;
        // for($i=0 ; $i<$countProducts;$i++)
        // {
        //     $total = $total + $ListProducts[$i]->price;
        // }

        // $total = sum($countProducts->price);
        return view('admin.product',compact('ListProducts','total','countProducts'),$this->Data);
    }
    public function postInfor(ProductRequest $request)
    {
        $products = new Users;
        $ListProducts = $products->getAllProducts();
        $data =[$request->id = count($products->getAllProducts()),$request ->name,$request->family,$request->price,$request->total];
        $products->addProducts($data);
        return redirect()->route('admin.product.list');
    }

    public function delete($id)
    {
        $products = new Users;
        $deleteProducts = $products->deleteProducts($id);
        return redirect()->route('admin.product.list');
    }

    public function getEdit($id)
    {
        $this ->Data['title'] ='Sửa Sản Phẩm';
        $products = new Users;
        $productDetail = $products->getProductDetail($id);
        if(!empty($productDetail[0]))
        {
            $productDetail = $productDetail[0];
        }
        else{
            return 'Data is not valid';
        }
        return view('admin.form.product.edit',compact('productDetail'),$this->Data);
    }

    public function postEdit(ProductRequest $request,$id)
    {
        $data = [$request->name,$request->family,$request->price];
        $products= new Users ;
        $updateProducts = $products->updateProducts($data,$id);
        return redirect()->route('admin.product.list');
    }
}
