<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Categori;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('front.home.home',[
            'blogs'=>Blog::where('status',1)->take(3)->latest()->get(),
            'services'=>Service::where('status',1)->take(3)->latest()->skip(2)->get(),
        ]);
    }

    public function blogPage(){
        return view('front.blog.allblog');
    }
    public function blogView($id){
        return view('front.blog.blog_details',[
            'blog'=>Blog::findOrFail($id),
        ]);
    }

    public function allService(){
        return view('front.service.all-service',[
            'services'=>Service::where('status',1)->get(),
        ]);
    }

    public function serviceDetails($id){
        return view('front.service.service-details',[
            'service'=>Service::findOrFail($id),

        ]);
    }

    public function contactView(){
        return view('front.contact.contact-view',[
            'services'=>Service::where('status',1)->get(),
        ]);
    }

    public function messageSubmit(Request $request){
        Contact::saveData($request);

        return redirect()->back()->with('message','Form Submit Successfully');
    }


}
