<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vegController extends Controller
{
    public function index()

    {

        return view ('veg');

    }

    public function farmers()
    {
      $farmers = \App\Farmer::all();

      dd($farmers);

      


    }

}
