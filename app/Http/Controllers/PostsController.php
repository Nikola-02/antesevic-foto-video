<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class PostsController extends BaseController
{
    public function index(Gallery $gallery)
    {
        return view('pages.posts', ["gallery"=>$gallery, "posts"=>$gallery->posts()->get()]);
    }
}
