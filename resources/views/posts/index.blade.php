<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!-- As a link -->

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
        <a href="/posts/{{$post['id']}}"><button type="button" class="btn btn-primary">view</button></a>
      <button type="button" class="btn btn-success">Edit</button>
      <a href="/posts/{{$post['id']}}"><button type="button" class="btn btn-danger">Delete</button>
</a></td>
      </tr>
        @endforeach
      
    
    
  </tbody>
</table>
</div>

</body>