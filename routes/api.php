<?php

use App\Models\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    ]);
    return 'mw bishal ho';
});