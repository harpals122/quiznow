<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\QuizDetails as QuizDetails;
use  App\NewTechLearnings as NewTechLearnings;
use  App\User as userDetails;
use  App\SliderImages as SliderImages;

class AdminController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(userDetails $userDetails,SliderImages $sliderimages,QuizDetails $quizDetails,NewTechLearnings $newtechlearnings )
    {
        $this->middleware('auth:admin');
        $this->sliderimages = $sliderimages;
        $this->userDetails = $userDetails;
        $this->quizdetails = $quizDetails;
        $this->newtechlearnings = $newtechlearnings;
        
    }

    public function index()
    {
        $data['sliderImages'] = $this->sliderimages->all(); 
        $data['userDetails'] = $this->userDetails->all();
        $data['quizDetails'] = $this->quizdetails->all();
        $data['newtechlearnings'] = $this->newtechlearnings->all();
        return view('admin/contents/index',$data);
    }
     

}
?>