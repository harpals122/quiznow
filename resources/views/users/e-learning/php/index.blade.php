@extends('layouts.app')

@section('content')



<h1 style="text-align:center">PHP</h1>
<strong></strong>

<div class="col-lg-12">
	<table style="border:1px solid red; width:80%; margin-left:10%;font-size:18px" class="table table-hover">
		<th style="border:1px solid red; width:80%; margin-left:10%;border-top:2px;font-size:18px">Table Of Content</th>
		<tr>
			<td>
				<a href="{{route('introductionToPhp')}}">Introduction</a>
			
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
