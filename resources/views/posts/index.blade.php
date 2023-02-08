<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="posts">All posts</a>
  </div>
</nav>
<div class="container pt-5">
  <div style="padding-left:45%;">
<a href="posts/create" > <button  type="button" class="btn btn-success" >Create post</button></a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col" style="padding-left:7%;">action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
     
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td><a href="{{route('posts.show', $post['id'])}}"><button type="button" class="btn btn-primary">view</button></a>
      <a href="{{route('posts.edit', $post['id'])}}"><button type="button" class="btn btn-success">Edit</button></a>
    
    <form  action="{{route('posts.destroy', $post['id'])}}" method='post'>
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>

</form>
      
      
</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>