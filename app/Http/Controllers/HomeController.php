<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;
use  App\SliderImages as SliderImages;
use  App\QuizDetails as QuizDetails;
use  App\NewTechLearnings as NewTechLearnings;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SliderImages $sliderimages, QuizDetails $quizdetails,NewTechLearnings $newtechlearnings)
    {
        
       
        $this->middleware('auth');
    
        $this->sliderimages = $sliderimages;
        $this->quizdetails = $quizdetails;
        
        $this->newtechlearnings = $newtechlearnings;
       
    }

   
    public function getIndex()
    {
        $data['sliderImages'] = $this->sliderimages->all();
        $data['quizdetails'] = $this->quizdetails->all();
        $data['newtechlearnings'] = $this->newtechlearnings->all();
        return view('users/contents/index',$data);
    }
}
