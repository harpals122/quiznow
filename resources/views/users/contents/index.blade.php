@extends('layouts.app')
@section('content')
<div class="container col-xs-12 col-lg-8 col-lg-offset-2">
    <div class="row" style="border: 1px solid red">
       <div class="col-xs-12 col-lg-7" >
        @include('users.contents.slider')
        </div> 
        <div class=" col-lg-5 col-xs-12 "  >
        @include('users.contents.quiz')
    </div>

    <div class=" col-lg-12 col-xs-12 " >
        <h3 >New Tech</h3><hr>
</div>  

       <div class="col-xs-12 col-lg-7" >
        @include('users.contents.primaryTutorials')
        </div> 
        <div class=" col-lg-5 col-xs-12 "  >
        @include('users.contents.primaryTutorialsSideBar')
    </div>

    <div class=" col-lg-12 col-xs-12 " >
        <h1 >Want To Learn?</h1><hr>

    <div class=" col-lg-12 col-xs-12 " >
        @include('users.contents.tutorialsGrid') 
</div> 
  <div class=" col-lg-12 col-xs-12 " >
        @include('users.contents.secondaryTutorials') 
</div>   
</div>
@endsection
