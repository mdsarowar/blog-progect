<?php


namespace App\helper;


use function Symfony\Component\HttpFoundation\setFile;

class Customhelper
{
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;

    public static function imageUpload($image,$directory){
//        self::$image=$request->file('blog_image');
        self::$imageName=time().rand(10,2000).'.'.$image->getClientOriginalExtension();
//        $this->imageDirectory='admin/assets/blog-images/';
        $image->move($directory,self::$imageName);
        return $directory.self::$imageName;
    }

}
