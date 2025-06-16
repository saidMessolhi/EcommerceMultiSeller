<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentController extends Controller
{
    //
    public function login(Request $request){
        return view('loginUser');
    }
}
