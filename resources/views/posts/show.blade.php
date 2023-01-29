
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/posts">All posts</a>
  </div>
</nav>
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
  
  </div>
</div>