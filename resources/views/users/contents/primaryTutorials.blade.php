@foreach ($newtechlearnings as $newtechlearnings)
<div id="main_section">
 
<div class="col-lg-4 " >
<image src='{{$newtechlearnings->image_path}}'  alt="no image" id="picture" class=" col-lg-12 .img-responsive">
</div>
<div class="col-lg-8">
<h2>{{$newtechlearnings->topic}} </h2>
<h4>{{$newtechlearnings->highlights}} </h4>
<p>{{$newtechlearnings->details}}</p>
<div id="quizcontrolbutton">
<a href="{{url('e-learning/'.strtolower($newtechlearnings->topic))}}">Learn {{$newtechlearnings->topic}}</a>
<a>{{$newtechlearnings->topic}} tricks</a>
<a>{{$newtechlearnings->topic}} quiz</a>   
</div>
</div>
 </div>

 @endforeach




