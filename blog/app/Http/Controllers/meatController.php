<?php

// namespace App\Http\Controllers;
//
// use Illuminate\Http\Request;
//
// class meatController extends Controller
// {
//     public function index()
//
//     {
//       $farmers = \App\Farmer::all();
//
//       return view ('meat', compact('farmers'));
//
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meatController extends Controller
{
    public function index()

    {
      $farms = \App\Farm::all();

      return view ('meat', compact('farms'));

    }
}
