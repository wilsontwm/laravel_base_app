<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class UserManagerService
{
    /**
     * Stores the profile image and creates the thumbnails if set
     *
     * @param $image
     * @param $fileName
     * @return array The image information
     */
    public static function storeProfileImage($image, $fileName)
    {
        $folderPath = config('baseapp.profile_image_url_path');

        $imagePath = $folderPath . $fileName;

        //Retrieving image size
        $imageSize = config('baseapp.profile_image_size');

        //Creating and saving the image
        $image = self::createImage($image, $imageSize[0], $imageSize[1], true);
        $image->save( public_path($imagePath) );
        //Storage::put($savePath, $image->stream()->__toString());

        return ['width' => $image->width(), 'height' => $image->height(), 'path' => $imagePath];
    }

    /**
     * Creates an image with the specified dimensions and aspect ratio
     *
     * @param $image
     * @param $width
     * @param $height
     * @param bool $aspectRatio
     * @return mixed
     */
    public static function createImage($image, $width, $height, $aspectRatio=true) {
        $img = Image::make($image);
        if (!$aspectRatio) {
            $img = $img->fit($width, $height);
        } else {
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

        }
        return $img;
    }

    public static function deleteImage($imagePath){
        if($imagePath !== null){
            $filename = public_path() . DIRECTORY_SEPARATOR . $imagePath;
            unlink($filename);
        }
    }


}