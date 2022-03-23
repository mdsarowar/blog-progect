<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService(){
        return view('admin.service.add');
    }

    public function newService(Request $request){


    }
}
