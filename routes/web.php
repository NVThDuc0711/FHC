<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\studying\HomeController;
// use App\Http\Controllers\studying\ProductController;
// use App\Http\Controllers\studying\AboutController;
use App\Http\Middleware\TestMiddleware ;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
Route::prefix('/admin')->group(function(){
    Route::get('/',[HomeController::class, 'index'])->name('admin.home');
    Route::post('/',[HomeController::class, 'postInfor']);
    Route::get('/delete/{id}',[HomeController::class,'getDelete'])->name('admin.delete');
    Route::get('/edit/{id}',[HomeController::class,'getEdit'])->name('admin.edit');
    Route::post('/edit/{id}',[HomeController::class,'postEdit']);
    Route::prefix('/product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('admin.product.list');
        Route::post('/',[ProductController::class,'postInfor']);
        Route::get('/edit/{id}',[ProductController::class,'getEdit'])->name('admin.product.edit');
        Route::post('/edit/{id}',[ProductController::class,'postEdit']);
        Route::get('/delete/{id}',[ProductController::class,'delete']);
    });
    Route::get('/about',[AboutController::class,'index'])->name('admin.about');
    Route::get('/contact',[ContactController::class,'index'])->name('admin.contact');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/home',[HomeController::class,'show'])->name('studying-home');

// Route::prefix('studying')->group(function(){
//     // Route::get('{id?}-{content?}',function($id =null ,$content = null){
//     //     if($id == null && $content ==null )
//     //     {
//     //         return 'NOT VALUE';
//     //     }
//     //     else
//     //     {
//     //         return 'Test Truyền Tham Số '.'id = '. $id.'<br>'.'Content ='.$content;
//     //     }

//     // });
//     Route::get('/',[HomeController::class,'home']);
//     Route::get('home',[HomeController::class,'show'])->middleware('test');
//     Route::post('home',[HomeController::class,'testMethodPost'])->name('studying-home');
//     Route::get('product',[ProductController::class,'show'])->name('studying-product');
//     Route::get('about',[AboutController::class,'about'])->name('studying-about');
// });
