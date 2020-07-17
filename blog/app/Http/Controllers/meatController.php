<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meatController extends Controller
{
    public function index()

    {
        $coolstring = 'hello from meat controller';

        return view ('meat', compact('coolstring'));

    }
}
