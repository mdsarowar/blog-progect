<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected static $service;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;


    public static function saveData($request){

        self::$image=$request->file('category_image');
        self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory='admin/assets/service-images/';
        self::$image->move(self::$imageDirectory,self::$imageName);
        self::$imageUrl=self::$imageDirectory.self::$imageName;

        self::$service=new Service();
        self::$service->category_name              =$request->category_name;
        self::$service->category_image             =self::$imageUrl;
        self::$service->status                     =$request->status;
        self::$service->save();

    }

    public static function updateData($request){
        self::$service=Categori::findOrFail($request->category_id);
        self::$image=$request->file('category_image');

        if (self::$image)
        {
            if (file_exists(self::$service->category_image))
            {
                unlink(self::$service->category_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory='admin/assets/cat-images/';
            self::$image->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl=self::$imageDirectory.self::$imageName;

        }
        else
        {
            self::$imageUrl=self::$service->category_image;
        }


        self::$service->category_name              =$request->category_name;
        self::$service->category_image             =self::$imageUrl;
        self::$service->status                     =$request->status;
        self::$category->save();

    }




}
