<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add');
    }

    public function newCategory(Request $request){

        Categori::saveData($request);

        return redirect()->back()->with('message','Category add successfully');
    }

    public function manageCategory(){

        return view('admin.category.view',[
            'categories'=>Categori::all(),
        ]);
    }

    public function statusChange($id){
        $category=Categori::findOrFail($id);
        $category->status=$category->status==0? '1':'0';
        $category->save();

        return redirect()->back()->with('message','change successfully');

    }

    public function deleteCategory($id){
        $category=Categori::findOrFail($id);
        if (file_exists($category->category_image))
        {
            unlink($category->category_image);
        }
        $category->delete();
        return redirect()->back()->with('message','delete successfully');
    }

    public function editCategory($id){

        return view('admin.category.edit',[
            'product'=>Categori::findOrFail($id),
        ]);
    }

    public function updateCategory(Request $request){
        Categori::updateData($request);

        return redirect(route('manage_category'))->with('message','Category add successfully');
    }
}

