<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Users extends Model
{
    use HasFactory;

    public function getAllUsers()
    {
        $users = DB::select('select * from admin');
        return $users;
    }

    public function getAllProducts()
    {
        $products = DB::select('select * from product ');
        return $products;
    }

    public function addUsers($data)
    {
        // if(!empty($data))
        // {
        //     if(DB::table('admin')->where('email',$data)->exists())
        //     {
        //         echo 'Email has existed';
        //     }
        //     else
        //     {
        //         DB::insert('INSERT INTO admin (name, email,comment,address) VALUES (?,?,?,?)',$data);
        //     }
        // }
        DB::insert('INSERT INTO admin (id,name, bill,phone,address,total_bill) VALUES (?,?,?,?,?,?)',$data);
    }

    public function addProducts($data)
    {
        DB::insert('INSERT INTO product (id,name, family,price,total) VALUES (?,?, ?,?,?)',$data);
    }

    public function deleteUsers($id)
    {
        return DB::delete('DELETE FROM admin WHERE id = ?',[$id]);
    }

    public function deleteProducts($id)
    {
        return DB::delete('DELETE FROM product WHERE id = ?',[$id]);
    }

    public function getDetail($id)
    {
        return DB::select('select * from admin where id = ?', [$id]);
    }

    public function getProductDetail($id)
    {
        return DB::select('select * from product where id = ?', [$id]);
    }

    public function updateUsers($data,$id)
    {
        $data = array_merge($data,[$id]);
        return DB::update('UPDATE admin SET name = ? ,bill = ? ,phone =?,address =?,total_bill=?  where id = ?', $data);
    }

    public function updateProducts($data,$id)
    {
        $data = array_merge($data,[$id]);
        return DB::update('UPDATE product SET name = ? ,family = ? ,price =?  where id = ?', $data);
    }

}
