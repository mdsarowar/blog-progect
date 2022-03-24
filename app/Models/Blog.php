<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DefaultController;
use App\helper\Customhelper;

class Blog extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected static $blog;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function saveData($request){


        self::$blog=new Blog();
//        self::$blog->category_id            =$request->category_id;
        self::$blog->blog_title              =$request->blog_title;
        self::$blog->blog_image              =Customhelper::imageUpload($request->file('blog_image'),'admin/assets/blog-images/');
        self::$blog->blog_content            =$request->blog_content;
        self::$blog->Status                  =$request->status;
        self::$blog->save();
    }

    public static function updateData($request){
        self::$blog=Blog::findOrFail($request->blog_id);
        $image=$request->file('blog_image');
        $fileimage=self::$blog->blog_image;
        $directory='admin/assets/blog-images/';



        self::$blog->blog_title              =$request->blog_title;
        self::$blog->blog_image              =Customhelper::updateimage($image,$fileimage,$directory);
        self::$blog->blog_content            =$request->blog_content;
        self::$blog->Status                  =$request->status;
        self::$blog->save();

    }



}
