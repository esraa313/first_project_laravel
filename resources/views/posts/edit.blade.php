<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/posts">All posts</a>
  </div>
</nav>

     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class='container'>
<form class="row g-3" method='post' action="{{route('posts.update', $post['id'])}}">
    @csrf
    @method('put')
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" name="title">Title</label>
    <input  class="form-control" id="inputEmail4" value="{{$post->title}}" name="title">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" name="description">description</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$post->description}}" name="description">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label" name="created_at">created_at</label>
    <input type="text" class="form-control" id="inputAddress2" value="{{$post->created_at}}" name="created_at">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label" name="updated_at">updated_at</label>
    <input type="text" class="form-control" id="inputCity" value="{{$post->updated_at}}" name="updated_at">
  </div>
  <button type="submit" class="btn btn-primary" style="width:133px;">Submit</button>
</form>
</div>