<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/posts">All posts</a>
  </div>
</nav>

  <div class='container pt-5'>
    <h2>Create new post</h2>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form method='post' action="/posts">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" name="title">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1"name="description"></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">created_by</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="created_by">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>