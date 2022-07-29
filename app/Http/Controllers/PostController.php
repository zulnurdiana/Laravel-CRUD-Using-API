<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        // jika user berada di halaman blog
        $title = '';

        // Jika user menekan category
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));

            $title = ' in ' . $category->name;
        }

        // jika user menekan penulis
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));

            $title = ' by ' . $author->name;
        }



        return view('blog', [
            "title" => "All Posts" . $title,
            "active" => "blogs",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Posts",
            "active" => "blogs",
            "post" =>  $post
        ]);
    }
}
