<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FilemanagerController extends Controller
{
    public function index()
    {
        return view('pages.admin.filemanager.index', [

        ]);
    }
}
