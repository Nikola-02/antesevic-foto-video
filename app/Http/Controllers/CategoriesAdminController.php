<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
                $form_fields['primary_image'] = $this->saveCompressedAndResizedImageAndGetImageName($request->file('primary_image'), 'categories');

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
    public function edit(Category $category)
    {
        return view('pages.admin.categories.edit', ["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $form_fields = $request->validate([
            'name'=>'required',
        ]);

        if($request->file('primary_image')) {
            $formFields = $request->validate(['primary_image' => 'mimes:jpg,png']);
        }

        try {

            if($request->file('primary_image')){
                $form_fields['primary_image'] = $this->saveCompressedAndResizedImageAndGetImageName($request->file('primary_image'), 'categories');

                $category->update($form_fields);
            }else{
                $category->update($form_fields);
            }

            return redirect('/admin/categories');

        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();

            return redirect('/admin/categories');

        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }
}
