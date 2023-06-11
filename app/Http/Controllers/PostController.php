<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        foreach ($posts as $post){
            dump($post->image,$post->likes);
        }
    }

//коллекция данных в виде массива
    public function create(){
        $postArr=[
            [
                'title' => 'Updated Title 1',
                'content' => 'This is the content of the first post.',
                'image' => 'first_post.jpg',
                'likes' => 10,
                'is_published' => true,
            ],
            [
                'title' => 'Updated Title 2',
                'content' => 'This is the content of the second post.',
                'image' => 'second_post.jpg',
                'likes' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'Updated Title 3',
                'content' => 'This is the content of the third post.',
                'image' => 'third_post.jpg',
                'likes' => 2,
                'is_published' => false,
            ],
        ];
        // с помощью цикла проходимся по массиву и добавляем данные в базу данных
        foreach ($postArr as $value){
            Post::create($value);
        }
        dd('created');
    }

    public function update(){
        $post=Post::find(6);


        $post->update([
            'title' => 'Updated',
            'content' => 'Updated',
            'image' => 'Updated.jpg',
            'likes' => 2,
            'is_published' => false,
        ]);
        dd('update');
    }
}
