<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        $name = "Nasro";

        return view('about', ['name' => $name]) ;
    }
}
