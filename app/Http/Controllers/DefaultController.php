<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    protected $image;
    protected $imageName;
    protected $imageDirectory;

    public function  imageUpload($image,$directory){
//        $this->image=$request->file('blog_image');
        $this->imageName=time().rand(10,2000).'.'.$image->getClientOriginalExtension();
//        $this->imageDirectory='admin/assets/blog-images/';
        $image->move($directory,$this->imageName);
        return $directory.$this->imageName;
    }
}
