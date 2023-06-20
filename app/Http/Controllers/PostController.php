<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function front()
    {
        return view('posts.front');
    }
    
    public function show_weight()
    {
        return view('posts.weight');
    }
    
    public function show_result_train()
    {
        return view('posts.result_train');
    }
}
?>