<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function getIndex()
    {
        
        return view('users/quiz/index');
    }
}
