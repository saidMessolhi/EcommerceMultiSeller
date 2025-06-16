<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\NationalCard;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $card = new NationalCard();
        $card->id_number = $request->id;
        $card->name = $request->name;
        $card->dob = date('Y-m-d', strtotime($request->dob)); // convert to yyyy-mm-dd
        $card->save();

        return response()->json(['success' => true]);
    }
}


