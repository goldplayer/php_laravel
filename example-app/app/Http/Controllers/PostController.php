<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
      $posts = Post::all();

      return view('post', compact('posts'));

    }

    public function create(){
        $postsArr = [
         [
             'title'=>'HW',
             'content'=>'Hello World',
             'image'=>'image.png',
             'likes'=>20,
             'dislikes'=>11,
         ],
        [
            'title'=>'HW_2',
            'content'=>'Hello World Second Time',
            'image'=>'image_time.png',
            'likes'=>20,
            'dislikes'=>11,
        ],
        ];

        foreach ($postsArr as $item) {

            Post::create($item);
//            dd($item);
        }
        dd('created');
    }


    public function update(){
        $post = Post::find(6);
        $post->update([
            'title'=>'update',
            'content'=>'update',
            'image'=>'update',
            'likes'=>100,
            'dislikes'=>0,
        ]);
        dd('update');
    }

    public function delete(){
//        $post = Post::find(2);
        $post = Post::withTrashed()->find(2);
        $post->restore();
//        $post->delete();
        dd('deleted');
    }

//    FirstOrCreate
//    UpdateOrCreate
    public function firstOrCreate(){
        $another_post = [
            'title'=>'new',
            'content'=>'new',
            'image'=>'update',
            'likes'=>1000,
            'dislikes'=>999,
        ];

       $post = Post::firstOrCreate([
            'title'=>'HW medal'
        ],[
            'title'=>'HW medal',
            'content'=>'new',
            'image'=>'update',
            'likes'=>1000,
            'dislikes'=>999,
        ]);
       dump($post->content);
       dd('end');
    }

    public function updateOrCreate(){
        $another_post = [
            'title'=>'uoc',
            'content'=>'uoc',
            'image'=>'uoc.png',
            'likes'=>99999,
            'dislikes'=>999,
        ];

        $post = Post::updateOrCreate([
            'title'=>'new post takogo eshe net'
        ],[
            'title'=>'chet hard gg wp',
            'content'=>'etot post est no content novii',
            'image'=>'uoc.png',
            'likes'=>99999,
            'dislikes'=>999,
        ]);

        dd($post->content);

    }
}
