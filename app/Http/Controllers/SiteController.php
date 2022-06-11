<?php

namespace App\Http\Controllers;

use App\Models\Post;

class SiteController extends Controller
{
    public function index(){
        return view('home', [
            'posts' => Post::newPost()
        ]);
    }
}