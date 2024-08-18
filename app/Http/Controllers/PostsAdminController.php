<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsAdminController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    public function update(Request $request, $id)
    {
        $form_fields = $request->validate([
            'posts.*' => 'required|mimes:jpg,jpeg,png,mp4,wav',
        ]);

        $fieldsForDatabase['gallery_id'] = $id;

        $imageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        $videoTypes = ['video/mp4', 'audio/wav'];

        try {

            if($request->file('posts') != null && count($request->file('posts')) > 0){
                $files = $request->file('posts');

                if(count($files) > 1){

                }else{
                    $file = $files[0];

                    $mimeType = $file->getClientMimeType();

                    if (in_array($mimeType, $imageTypes)) {
                        $imageName = $this->saveCompressedAndResizedImageAndGetImageName($file, 'posts');

                        $fieldsForDatabase['path'] = $imageName;

                        Post::create($fieldsForDatabase);
                    } elseif (in_array($mimeType, $videoTypes)) {
                        return redirect()->back()->with('success', 'Video je.');
                        // Ako je video
                        //$videoName = $this->compressAndSaveVideo($file, 'destination-folder');
                    } else {
                        return redirect()->back()->with('error', 'Nepodržan tip fajla.');
                    }
                }

                return redirect()->back()->with('success', 'Uspesno dodati fajlovi.');
            }else{
                return redirect()->back()->with('error', 'Bar jedan fajl je obavezan da se posalje.');
            }


        }catch (\Exception $ex){
            return redirect()->back()->with('error', 'Desila se greska u bazi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
