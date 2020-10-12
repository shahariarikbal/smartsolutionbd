<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;
class ProductController extends Controller
{
    //Product Information

    public function add_product(){
        $show_product = Product::all();
        return view('back.product.add-product', compact('show_product'));
    }

    public function save_product(Request $request){
        $this->validate($request,[
            'name'   => 'required|max:255',
            'description'   => 'required',
            'ban_description'   => 'required',
            'image'   => 'required',
        ]);

        $save_product = new Product();

        if ($request->hasFile('image')){
            $productImage = $request->file('image');
            $imageName = $productImage->getClientOriginalName();
            $fileName = time().'_product_image_'.$imageName;
            $directory = public_path('/product-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($productImage)->resize(400, 340)->save($coursesImgUrl);
            $save_product->image = $fileName;
        }
        $save_product->name = $request->name;
        $save_product->short_description = $request->short_description;
        $save_product->price = $request->price;
        $save_product->description = $request->description;
        $save_product->ban_description = $request->ban_description;
        $save_product->save();
        return redirect()->back()->with('message', 'Product has been Saved');
    }

    public function active_product($id){
        $active_product = Product::find($id);
        $active_product->status = 0;
        $active_product->save();
        return redirect()->back()->with('message', 'Product has been Pending');
    }
    public function pending_product($id){
        $pending_product = Product::find($id);
        $pending_product->status = 1;
        $pending_product->save();
        return redirect()->back()->with('message', 'Product has been Active');
    }

    public function delete_product($id){
        $delete_product = Product::find($id);
        $delete_product->delete();
        return redirect()->back()->with('message', 'Product has been Deleted');
    }
}
