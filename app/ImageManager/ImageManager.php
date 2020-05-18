<?php


namespace App\ImageManager;


use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class ImageManager
{
    private const ROOT_DIR = 'images/';
    private const EVENT_DIR = 'events/';
    private const USER_DIR = 'images/';

    public function moveEventImage(UploadedFile $image)
    {
        $imageName = $this->parseFileName($image->getClientOriginalName());
        if ($image->move(self::ROOT_DIR.self::EVENT_DIR, $imageName)){
            return $this->getFileRoute($imageName);
        }
        return null;
    }

    public function moveProfileImage(UploadedFile $image)
    {
        $imageName = $this->parseFileName($image->getClientOriginalName());
        if ($image->move(self::ROOT_DIR.self::USER_DIR, $imageName)){
            return $this->getFileRoute($imageName);
        }
        return null;
    }

    public function parseFileName(string $fileName)
    {
        return str_replace(' ', '_', $fileName);
    }

    private function getFileRoute(string $imageName)
    {
        return self::ROOT_DIR.self::EVENT_DIR.$imageName;
    }
}
