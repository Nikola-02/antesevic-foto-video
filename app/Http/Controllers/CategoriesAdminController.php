<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class CategoriesAdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.categories.home', ['categories'=> Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_fields = $request->validate([
            'name'=>'required',
            'primary_image'=>'required|mimes:jpg,jpeg,png'
        ]);

        try {

            if($request->file('primary_image')){
                $form_fields['primary_image'] = $this->saveImageAndGetImageName($request->file('primary_image'));

                Category::create($form_fields);
            }else{
                return redirect()->back()->with('error', 'Slika je obavezna da se posalje.');
            }

            return redirect('/admin/categories');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
