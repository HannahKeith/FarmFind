<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meatController extends Controller
{
    public function index()

    {
      $farmers = \App\Farmer::all();

      return view ('meat', compact('farmers'));

    }
}
