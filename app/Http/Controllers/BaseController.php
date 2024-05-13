<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;

class BaseController extends Controller
{
    protected function saveImageAndGetImageName($file){
        $image = $file;
        $timestamp = now()->timestamp;
        $new_image_name = $timestamp . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('/assets/images/categories');

        $img = Image::make($image->getRealPath());
        $img->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($destinationPath.'/'.$new_image_name, 70);

        return $new_image_name;
    }
}
