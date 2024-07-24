<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class BaseController extends Controller
{
    protected function saveCompressedAndResizedImageAndGetImageName($file, $destination){
        $image = $file;
        $timestamp = now()->timestamp;
        $new_image_name = $timestamp . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('/assets/images/' . $destination);

        $img = imagecreatefromstring(file_get_contents($image->getRealPath()));

        $width = imagesx($img);
        $height = imagesy($img);
        $new_width = 600;
        $new_height = floor($height * ($new_width / $width));

        $new_img = imagecreatetruecolor($new_width, $new_height);

        imagecopyresampled($new_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        imagejpeg($new_img, $destinationPath.'/'.$new_image_name, 70);

        imagedestroy($img);
        imagedestroy($new_img);

        return $new_image_name;
    }

}
