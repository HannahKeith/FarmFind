<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vegController extends Controller
{
    public function index()

    {
        $coolstring = 'hello from routes';

        return view ('veg', compact('coolstring'));



    }
}
