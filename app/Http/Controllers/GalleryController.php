<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    public function index($cat_id)
    {
        $galleries = Gallery::where('category_id', $cat_id)->get();
        return view('pages.galleries', ["galleries"=>$galleries]);
    }
}
