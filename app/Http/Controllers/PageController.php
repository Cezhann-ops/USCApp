<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Get the home page of the welcom view

    public function index()
    {
      return view('welcome');
    }

    public function aboutus()
    {
      return view('aboutus');
    }

    public function webdesign()
    {
      return view('services.webdesign');
    }


}
