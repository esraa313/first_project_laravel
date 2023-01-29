<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(request $request){
        $allPosts = [
            [
            'id' => 1,
            'title' => 'laravel',
            'description' => 'Hello this is laravel post',
            'posted_by' => 'ahmed' ,
            'created_at' => '2022-02-28 10:05:55'
            ],
            [
                'id' => 2,
                'title' => 'php',
                'description' => 'Hello this is php post',
                'posted_by' => 'mazen' ,
                'created_at' => '2021-02-28 10:05:55',
            ],   [
                'id' => 3,
                'title' => 'javascript',
                'description' => 'Hello this is javascript post',
                'posted_by' => 'ibrahim' ,
                'created_at' => '2012-02-28 10:05:55',
            ]
        
            ];
            if($request->query('id')){
                $allPosts = array_filter($allPosts,function($id){
                    return $id['id'] == request()->id;
                });
            }

        return view('posts.index',[
            'posts' => $allPosts
        ]
            );
    }
    public function create(){
        return view('posts.create',[
            
        ]);
    }
    public function show($postId){
        $allPosts = [
            [
            'id' => 1,
            'title' => 'laravel',
            'description' => 'Hello this is laravel post',
            'posted_by' => 'ahmed' ,
            'created_at' => '2022-02-28 10:05:55'
            ],
            [
                'id' => 2,
                'title' => 'php',
                'description' => 'Hello this is php post',
                'posted_by' => 'mazen' ,
                'created_at' => '2021-02-28 10:05:55',
            ],   [
                'id' => 3,
                'title' => 'javascript',
                'description' => 'Hello this is javascript post',
                'posted_by' => 'ibrahim' ,
                'created_at' => '2012-02-28 10:05:55',
            ]
        
            ];
            $postId--;
        return view('posts.show',[
            
            'post' => $allPosts[$postId]
        ]);
    }
    public function store(request $request){
        return redirect()->route('posts');

        
    }
    public function edit(request $request){
        return redirect()->route('posts/create');

        
    }

public function destroy($postId){
    $allPosts = [
        [
        'id' => 1,
        'title' => 'laravel',
        'description' => 'Hello this is laravel post',
        'posted_by' => 'ahmed' ,
        'created_at' => '2022-02-28 10:05:55'
        ],
        [
            'id' => 2,
            'title' => 'php',
            'description' => 'Hello this is php post',
            'posted_by' => 'mazen' ,
            'created_at' => '2021-02-28 10:05:55',
        ],   [
            'id' => 3,
            'title' => 'javascript',
            'description' => 'Hello this is javascript post',
            'posted_by' => 'ibrahim' ,
            'created_at' => '2012-02-28 10:05:55',
        ]
    
        ];
        $postId--;
        return view('posts.destroy',function(){
           
            return redirect()->route('posts');
        }
        );

}}
