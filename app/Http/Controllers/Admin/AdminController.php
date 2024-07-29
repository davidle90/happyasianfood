<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        $post = Post::first();

            if(!$post){
                $post = Post::create();
            }

        return view('pages.admin.index', [
            'post' => $post
        ]);
    }
}
