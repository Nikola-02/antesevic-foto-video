<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class GalleriesAdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.galleries.home', ['galleries'=> Gallery::with('category')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.galleries.create', ['categories'=> Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_fields = $request->validate([
            'name'=>'required',
            'primary_image'=>'required|mimes:jpg,jpeg,png',
            'category_id'=>'required'
        ]);

        try {

            if($request->file('primary_image')){
                $form_fields['primary_image'] = $this->saveCompressedAndResizedImageAndGetImageName($request->file('primary_image'), 'galleries');

                Gallery::create($form_fields);
            }else{
                return redirect()->back()->with('error', 'Slika je obavezna da se posalje.');
            }

            return redirect('/admin/galleries');
        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        $posts = Post::where('gallery_id', $gallery->id)->get();

        return view('pages.admin.galleries.show', ['gallery'=> $gallery->load('category'), 'posts'=>count($posts) > 0 ? $posts : []]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('pages.admin.galleries.edit', ["gallery"=>$gallery]);
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
    public function destroy(Gallery $gallery)
    {
        try {
            $gallery->delete();

            return redirect('/admin/galleries');

        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }
}
