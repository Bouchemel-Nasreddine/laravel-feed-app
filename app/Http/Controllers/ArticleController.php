<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articleById($id){
        return view('article', ['id' => $id]);
    }
}
