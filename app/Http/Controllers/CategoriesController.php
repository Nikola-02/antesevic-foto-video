<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends BaseController
{
    public function index()
    {
        return view('pages.categories');
    }
}
