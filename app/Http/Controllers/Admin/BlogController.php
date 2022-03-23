<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.add',[
            'categories'=>Blog::where('status',1)->get(),
        ]);
    }

    public function newBlog(Request $request){
        Blog::saveData($request);
        return redirect()->back()->with('message','add blog successfully');

    }

    public function manageBlog(){
        return view('admin.blog.view',[
            'blogs'=>Blog::all(),
        ]);
    }

    public function blogStatus($id){
        $blog=Blog::findOrFail($id);
        $blog->status=$blog->status==0? '1':'0';
        $blog->save();
        return redirect()->back()->with('message','change blog successfully');

    }

    public function editBlog($id){


        return view('admin.blog.edit',[
            'blog'=>Blog::findOrFail($id)
        ]);

    }
    public function deleteBlog($id){
        $blog=Blog::findOrFail($id);
        if (file_exists($blog->blog_image)){
            unlink($blog->blog_image);
        }
        $blog->delete();

        return redirect()->back()->with('message','delete blog successfully');
    }

    public function updateBlog(Request $request){
        Blog::updateData($request);
        return redirect(route('manage_blog'))->with('message','update blog successfully');

    }
}
