<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
     public function __construct()
    {
      $this->middleware('auth');
    }

    public function Index()
    {
        return view('dashbaord.index');
    }


    public function GetProduct()
    {
        return view('dashbaord.products');
    }
}
