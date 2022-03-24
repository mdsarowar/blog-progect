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
        Service::saveData($request);
        return redirect()->back()->with('message','Service Add successfully');

    }

    public function manageService(){
        return view('admin.service.view',[
            'services'=>Service::all(),
        ]);
    }

    public function serviceStatus($id){

        $service=Service::findOrFail($id);
        $service->status=$service->status ==0 ? '1':'0';
        return redirect()->back()->with('message','status change successfully');
    }

    public function editService($id){
        return view('admin.service.edit',[
            'service'=>Service::findOrFail($id),
        ]);
    }

    public function delete_service($id){
        $service=Service::findOrFail($id);
        if (file_exists($service->service_image))
        {
            unlink($service->service_image);
        }
        $service->delete();

        return redirect()->back()->with('message','Service delete Successfylly');
    }

    public function updateService(Request $request){
        Service::updateData($request);
        return redirect(route('manage_service'))->with('message','Service edit Successfully');
    }

}
