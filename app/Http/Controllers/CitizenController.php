<?php

namespace App\Http\Controllers;

use App\Models\NationalCard;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    //
    public function index()
{
    $data = NationalCard::all(); // example: Citizen::all();
    return view('citizen', compact('data'));
}
}
