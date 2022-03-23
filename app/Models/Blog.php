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
        self::$image=$request->file('blog_image');
        if (self::$image)
        {
            if (file_exists(self::$blog->blog_image)){
                unlink(self::$blog->blog_image);
            }
            self::$imageName=time().rand(10,2000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory='admin/assets/blog-images/';
            self::$image->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl=self::$imageDirectory.self::$imageName;
        }
        else{
            self::$imageUrl=self::$blog->blog_image;
        }

        self::$blog->blog_title              =$request->blog_title;
        self::$blog->blog_image              =self::$imageUrl;
        self::$blog->blog_content            =$request->blog_content;
        self::$blog->Status                  =$request->status;
        self::$blog->save();

    }



}
