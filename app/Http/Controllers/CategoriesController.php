<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends BaseController
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.categories', ["categories"=>$categories]);
    }
}
