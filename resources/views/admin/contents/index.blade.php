@extends('layouts.app')
@section('content')
 <h1>Admin Page </h1>
 <div>
 
@include('admin.contents.viewUser')
@include('admin.contents.viewSliderTopics')
@include('admin.contents.viewQuiz')
@include('admin.contents.viewNewTechTopics')
 </table>
@endsection
