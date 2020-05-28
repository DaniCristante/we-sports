<?php


namespace App\ImageManager;


use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class ImageManager
{
    protected const ROOT_DIR = 'images/';
    protected const EVENT_DIR = 'events/';
    protected const USER_DIR = 'profile/';

    public function moveEventImage(UploadedFile $image)
    {
        $imageName = $this->parseFileName($image->getClientOriginalName());
        $imageName = $this->randomNum($imageName);

        $fileRoute = self::ROOT_DIR . self::EVENT_DIR . $imageName;
        if ($image->move(self::ROOT_DIR . self::EVENT_DIR, $imageName)) {
            return $fileRoute;
        }
        return null;
    }

    public function moveProfileImage(UploadedFile $image)
    {
        $imageName = $this->parseFileName($image->getClientOriginalName());
        $imageName = $this->randomNum($imageName);

        $fileRoute = self::ROOT_DIR . self::USER_DIR . $imageName;
        if ($image->move(self::ROOT_DIR . self::USER_DIR, $imageName)) {
            return $fileRoute;
        }
        return null;
    }

    private function parseFileName(string $fileName)
    {
        return str_replace(' ', '_', $fileName);
    }

    private function randomNum(string $image)
    {
        $image = rand(1000000, 100000000) . '_' . $image;
        return $image;
    }

}
