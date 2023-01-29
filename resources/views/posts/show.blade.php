
@extends('layouts.app')
@section('end1')
<div class='container'>
<div class="" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">The details of post</h3> <br>
    <h4>Id</h4> <br>
    <p>{{$post['id']}}</p> <br> <hr>
    <h4>Title</h4> <br>
    <p>{{$post['title']}}</p> <br> <hr>
    <h4>description</h4> <br>
    <p>{{$post['description']}}</p> <br> <hr>
  
    @endsection