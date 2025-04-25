<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Api;
use App\Models\Comments;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', function(Request $request){
    return Api::all();
});

Route::post('/add/users', function(Request $request){
    Api::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'address'=>$request->address
    ]);
    return 'mw bishal ho';
});

Route::delete('/remove/user{id}', function($id){
    Api::destroy($id);
});


Route::get('/comments', function(){
    return Comments::all();
});

Route::post('/add/comment', function(Request $request){
    Comments::create([
        'user_id' => $request->user_id,
        'comment'=> $request->comment,
        'react'=> $request->react
    ]);
    return 'Bishwash Chor';
});

Route::delete('/delete/comment/{id}', function($id){
    Comments::destroy($id);
    return 'bishwash daka';
});