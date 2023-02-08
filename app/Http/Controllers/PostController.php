<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StoreRequest;

class PostController extends Controller
{
    public function index(){
        $allPosts = Post::all();
        return view('posts.index',['posts' => $allPosts ]);

    }
    public function create(){
      
        return view('posts.create',);

    }
    public function show($postId){
       
    
        $post = Post::find($postId);
     
        return view('posts.show',[
            'post' => $post
        ]);

    } 
    public function store(StoreRequest $request){
        // $request->validate([
        //     'title' => 'required|unique:posts|min:3',
        //     'description' => ['required','min:10'],
        // ]);
        $request->old('title');
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        // $userId = $data['post_creater'];
        Post::create([
            'title' => $title ,
            'description' => $description ,
        // 'user_id' => $userId,
            
        ]);
        return to_route(route:'posts.index');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post ]);
}  

 public function update($id,StoreRequest $request){
    // dd( $id);
    // $request->validate([
    //     'title' => 'required|unique:posts|min:3',
    //     'description' => ['required','min:10'],
    // ]);
    $post = Post::find($id);
    // dd($post);
    $post->update([
        'title' => $request->title ,
            'description' => $request->description ,
            
    ]);
    // $post->title =  $request->title;
    // $post->description =  $request->description;
    // $post->created_at =  $request -> created_at;
    // $post->updated_at =  $request -> updated_at;
    // $post->save();
    return redirect('posts');
   
}
public function sluggable():array
{
    return[
        'slug' => ['source' => 'title']
    ];
}

public function destroy($id)
{
    $post = Post::findOrFail($id);

    $post->delete();

    return redirect()->route('posts.index');
}
public function restore()
{
    $allPosts = Post::onlyTrashed()->get();
    return view('posts.restore', ['posts' => $allPosts,]);
}
public function reback($postId)
{
    Post::whereId($postId)->restore();
    return back();
}

public function create()
{
    $users = User::get();
    return view(view:'posts.create',[
        'users' => $users,
    ]);
}
}