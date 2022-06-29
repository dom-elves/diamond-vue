<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function index(Request $request)
    {
        dd($request->);
        return view('board');
    }
}
