@extends('layouts.app')
@section('end1')
<div class="container">
    <div class=" mt-5" style="padding-left:40%">
    <a href="/posts/create"><button type="button" class="btn btn-success" >Create post</button></a>
    </div>
    <table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">posted_by</th>
      <th scope="col">created_at</th>
      <th scope="col" class='ps-5'>Actions</th>
    </tr>
  </thead>
  <tbody>
    
        @foreach($posts as $post)
       
        <tr>
        <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
      <a href="{{route('posts.show', $post['id'])}}"><button type="button" class="btn btn-primary">view</button></a>
      <a href=""><button type="button" class="btn btn-success">Edit</button></a>
      <a href=""><button type="button" class="btn btn-danger">Delete</button>
</a></td>
      </tr>
        @endforeach
      
    
    
  </tbody>
</table>
@endsection
