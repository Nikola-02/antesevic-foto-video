<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesAdminController extends Controller
{
    public function index(){
        return view('pages.admin.categories.home');
    }
}
