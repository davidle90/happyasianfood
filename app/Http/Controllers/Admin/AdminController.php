<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index', [
        ]);
    }
}
