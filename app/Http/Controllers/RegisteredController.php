<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    // 

    public function register(Request $request){
        return view('registerUser');

    } 
}
