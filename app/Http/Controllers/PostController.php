<?php

namespace App\Http\Controllers;

//use App\Models\post;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('post',[
            "title" => "All POsts" . $title,
            "active" => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show($slug){
        return view('posts',[
            "pos" => Post::find($slug),
            "active" => 'posts',
        ]);
    }
}
