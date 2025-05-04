<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// // route for api model
// Route::get('/users', [ApiController::class,'GetAllUsers']);


// Route::post('/add/user', [ApiController::class,'AddUser']);

// route for comment 
// Route::get('/comments', function(){
//     return Comments::all();
// });

// Route::post('/add/comment', function(Request $request){
//     Comments::create([
//         'user_id' => $request->user_id,
//         'comment'=> $request->comment,
//         'react'=> $request->react
//     ]);
//     return 'Bishwash Chor';
// });

// Route::delete('/delete/comment/{id}', function($id){
//     Comments::destroy($id);
//     return 'bishwash daka';
// });

// Route::resource('comments', CommentsController::class);

// route for product 
// Route::get('/products', function(){
//     return Products::all();
// });

// Route::post('/add/product', function(Request $request){
//     Products::create(
//         $request->all(),
//     );
//     return 'product added succesfully';
// });

// Route::delete('/delete/product/{id}', function($id){
//     Products::destroy($id);
//     return 'product deleted';
// });

// Route::post('/update/product/{id}', function( Request $request, $id){
//     $CurrentProduct = Products::find($id);
//     $CurrentProduct->update($request->all());
//     return 'Product Updated';
// });

// Route::get('/search/product/{keyword}', function($keyword){
//     $SearchedProduct = Products::where('title','like','%' . $keyword . '%')->select('id','title','description','price')->get();
//     return $SearchedProduct;
// });

Route::resource('products', ProductsController::class);

Route::post('/user/register',[AuthController::class,'register']);
Route::post('/user/login', [AuthController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('/user/logout/{id}', [AuthController::class,'logout']);
});