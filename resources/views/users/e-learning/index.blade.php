@extends('layouts.app')

@section('content')
<div class="col-lg-12 " style="  padding-right:75px;padding-top:20px;padding-bottom:20px">
@foreach ($newtechlearnings as $newtechlearnings)
<div class="col-lg-2 col-lg-offset-1" ">
<image src='{{$newtechlearnings->image_path}}' style="height:90px"  alt="no image"  class=" col-lg-12 col-xs-9 .img-responsive" >
<h3>{{$newtechlearnings->topic}}</h3>
<h4 >{{$newtechlearnings->highlights}} </h4>
<small>{{$newtechlearnings->details}}</small>
</div>
@endforeach
</div>
<div>
	<table style="border:1px solid red; width:80%; margin-left:10%;font-size:18px" class="table table-hover">
		<th style="border:1px solid red; width:80%; margin-left:10%;border-top:2px;font-size:18px">Table Of Content</th>
		<tr>
			<td>
				<a href="{{route('e-learning')}">Introduction</a>
			
			</td>
		</tr>
		<tr>
			<td>Basics</td>
		</tr>
        <tr>
			<td>Syntax</td>
		</tr>
		<tr>
			<td>Operators</td>
		</tr>
		<tr>
			<td>Arrays</td>
		</tr>
		<tr>
			<td>Control Structure</td>
		</tr>
        <tr>
			<td>Functions</td>
		</tr>
		<tr>
			<td>Predefined Variables</td>
		</tr>
		<tr>
			<td>Files</td>
		</tr>
		

	</table>
</div>
@endsection
