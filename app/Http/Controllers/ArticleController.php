<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // return the view for controller
     public function getIndex()
    {
        
        return view('users/articles/index');
    }
}
