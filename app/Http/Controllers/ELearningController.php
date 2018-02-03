<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\NewTechLearnings as NewTechLearnings;

class ELearningController extends Controller
{
	public function __construct(NewTechLearnings $newtechlearnings)
    {
    	$this->middleware('auth');
        $this->newtechlearnings = $newtechlearnings;
    }
    public function getIndex()
    {
    	 $data['newtechlearnings'] = $this->newtechlearnings->all();
        return view('users/e-learning/index',$data);
    } 
}
