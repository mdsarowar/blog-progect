<?php

namespace App\Models;

use App\helper\Customhelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected static $category;
    protected static $image;
    protected static $imagename;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveData($request){

        $image=$request->file('category_image');
//        self::$imagename=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
        $imageDirectory='admin/assets/cat-images/';


        self::$category=new Categori();
        self::$category->category_name              =$request->category_name;
        self::$category->category_image             =Customhelper::imageUpload($image,$imageDirectory);
        self::$category->status                     =$request->status;
        self::$category->save();

    }

    public static function updateData($request){
        self::$category=Categori::findOrFail($request->category_id);
        $image=$request->file('category_image');
        $fileimage=self::$category->category_image;
        $imageDirectory='admin/assets/cat-images/';

//        if (self::$image)
//        {
//            if (file_exists(self::$category->category_image))
//                {
//                    unlink(self::$category->category_image);
//                }
//            self::$imagename=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
//            self::$imageDirectory='admin/assets/cat-images/';
//            self::$image->move(self::$imageDirectory,self::$imagename);
//            self::$imageUrl=self::$imageDirectory.self::$imagename;
//
//        }
//        else
//        {
//            self::$imageUrl=self::$category->category_image;
//        }


        self::$category->category_name              =$request->category_name;
        self::$category->category_image             =Customhelper::updateimage($image,$fileimage,$imageDirectory);
        self::$category->status                     =$request->status;
        self::$category->save();

    }

}
