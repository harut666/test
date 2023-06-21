<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){ //показ всех
        $posts = Post::all();
        return view('post.index',compact('posts'));//передаем посты во вьюшку
    }

//коллекция данных в виде массива
    public function create(){ // показ страницы создания

        return view('post.create');
    }


    public function store(){//отправка данных на сохранение
        $date = request()->validate([
            'title' => 'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        Post::create($date);
        return redirect()->route('post.index');
    }

    public function show(Post $post){
       // $post = Post::findorFail($id);//если не найдет по id  то вернет страниц 404

        return view('post.show',compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit',compact('post'));
    }

    public function update(Post $post){
        $date = request()->validate([
            'title' => 'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        $post->update($date);
        return redirect()->route('post.show', $post->id);
    }

   /* public function delete(){
        $post=Post::find(3);
        $post->delete();
        dd('Deleted');
    }*/
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }

    //  восстановление умно удаленной записи
    public function restore(){
        $post = Post::withTrashed()->find(3);
        $post->restore();

    }
}
