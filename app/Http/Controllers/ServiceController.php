<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Image;
class ServiceController extends Controller
{
    //Product Information

    public function add_service(){
        $show_service = Service::all();
        return view('back.service.add-service', compact('show_service'));
    }

    public function save_service(Request $request){
        $this->validate($request,[
            'name'   => 'required|max:255',
            'description'   => 'required',
            'image'   => 'required',
        ]);

        $save_service = new Service();

        if ($request->hasFile('image')){
            $serviceImage = $request->file('image');
            $imageName = $serviceImage->getClientOriginalName();
            $fileName = time().'_service_image_'.$imageName;
            $directory = public_path('/service-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($serviceImage)->save($coursesImgUrl);
            $save_service->image = $fileName;
        }
        $save_service->name = $request->name;
        $save_service->description = $request->description;
        $save_service->save();
        return redirect()->back()->with('message', 'Service has been Saved');
    }

    public function active_service($id){
        $active_service = Service::find($id);
        $active_service->status = 0;
        $active_service->save();
        return redirect()->back()->with('message', 'Service has been Pending');
    }
    public function pending_service($id){
        $pending_service = Service::find($id);
        $pending_service->status = 1;
        $pending_service->save();
        return redirect()->back()->with('message', 'Service has been Active');
    }

    public function delete_service($id){
        $delete_service = Service::find($id);
        $delete_service->delete();
        return redirect()->back()->with('message', 'Service has been Deleted');
    }
}
