<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
    $post = Post::all() ;
    return PostResource::collection($posts);
    // $response = [] ;
    // foreach($posts as $post){
    //     $response [] = [
    //         'id' => $post->id,
    //         'title' => $post->title,
    //         'description' => $post->description,
    //     ];
    // }
    // return $response;
   }
   
   public function show($postId)
   {
    
    $post = Post::find($postId) ;
    return new PostResouce($post);
    // return [
    //     'id' => $post->id,
    //     'title' => $post->title,
    //     'description' => $post->description,
    // ];

   }
   public function store(StoreRequest $request){
    $request->old('title');
    $data = request()->all();
    $title = $data['title'];
    $description = $data['description'];
    $userId = $data['post_creater'];
   
    $post = Post::create([
        'title' => $title ,
        'description' => $description ,
        'user_id' => $userId,
    ]);
       return $post;
}
}
