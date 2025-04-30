<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function GetAllUsers() {
        return Api::all();

    }

    public function AddUser(Request $request){
        return Api::create($request->all());
    }
}
