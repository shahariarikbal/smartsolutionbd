<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Image;
class SliderController extends Controller
{
    public function add_slider(){
        $show_slider = Slider::all();
        return view('back.add-slider', compact('show_slider'));
    }

    public function save_slider(Request $request){
        $this->validate($request,[
            'name'   => 'required|max:255',
            'description'   => 'required',
            'image'   => 'required',
        ]);

        $save_slider = new Slider();

        if ($request->hasFile('image')){
            $sliderImage = $request->file('image');
            $imageName = $sliderImage->getClientOriginalName();
            $fileName = time().'_slider_image_'.$imageName;
            $directory = public_path('/slider-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($sliderImage)->save($coursesImgUrl);
            $save_slider->image = $fileName;
        }
        $save_slider->name = $request->name;
        $save_slider->description = $request->description;
        $save_slider->save();
        return redirect()->back()->with('message', 'Slider has been Saved');
    }

    public function active_slider($id){
        $active_slider = Slider::find($id);
        $active_slider->status = 0;
        $active_slider->save();
        return redirect()->back()->with('message', 'Slider has been Pending');
    }
    public function pending_slider($id){
        $pending_slider = Slider::find($id);
        $pending_slider->status = 1;
        $pending_slider->save();
        return redirect()->back()->with('message', 'Slider has been Active');
    }

    public function delete_slider($id){
        $delete_slider = Slider::find($id);
        $delete_slider->delete();
        return redirect()->back()->with('message', 'Slider has been Deleted');
    }

}
