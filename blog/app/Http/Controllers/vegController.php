<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vegController extends Controller
{
    public function index()

    {
        $farmers = \App\Farmer::all();

        return view ('veg', compact('farmers'));

    }





}
