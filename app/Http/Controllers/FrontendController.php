<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\CustomerQuestion;
use App\PostDetails;
use App\Product;
use App\Register;
use App\Service;
use App\Slider;
use App\Support;
use App\Tag;
use Illuminate\Http\Request;
use Image;
class FrontendController extends Controller
{
    public function index(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.home.index', compact('product_show','show_slider', 'show_service'));
    }

    public function view_product(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.product.products', compact('show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function supports(){
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_support = Support::where('status', 1)->orderBy('id', 'desc')->get();
        $show_answer = CustomerQuestion::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.support.support', compact('show_answer','show_support','show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function service_details(){
//        $single_product_info = Service::where('id', $id)->where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.service.service', compact('show_service','show_slider', 'product_page', 'product_show'));
    }
    public function show_blog(){
//        $single_product_info = Service::where('id', $id)->where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_blog = Blog::where('status', 1)->orderBy('id', 'desc')->paginate(5);
        $show_tag = Tag::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.blog.blog', compact('show_tag','show_blog','show_service','show_slider', 'product_page', 'product_show'));
    }

    public function customer_question(Request $get){
        $insert = \App\CustomerQuestion::insert([
            "name" => $get->name,
            "email" => $get->email,
            "phone_number" => $get->phone_number,
            "question" => $get->question,
        ]);
        if ($insert){
            return response()->json("success");
        }else{
            return response()->json("error");
        }

    }

    public function show_blog_post_comments(Request $request){
        $this->validate($request,[
            'name'  => 'required',
            'email'  => 'required',
            'comments'  => 'required',
        ]);

        $post_comments = new PostDetails();
        $post_comments->name = $request->name;
        $post_comments->email = $request->email;
        $post_comments->comments = $request->comments;
        if ($post_comments->save()){
            return response()->json("success");
        }else{
            return response()->json("error");
        }
    }

    public function product_details($id){
        $single_product = Product::where('id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_support = Support::where('status', 1)->orderBy('id', 'desc')->get();
        $show_answer = CustomerQuestion::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.product.product-details', compact('single_product','show_answer','show_support','show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function show_blog_details($id){
        $cmnt_blog = PostDetails::orderBy('created_at', 'desc')->get();
        $totalComment = 0;
        foreach ($cmnt_blog as $blog){

            $totalComment = $totalComment + count([$blog->comments]);
        }

        $single_blog = Blog::where('id', $id)->where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_support = Support::where('status', 1)->orderBy('id', 'desc')->get();
        $show_answer = CustomerQuestion::where('status', 1)->orderBy('id', 'desc')->get();
        $show_tag = Tag::where('status', 1)->orderBy('id', 'desc')->get();
        $show_blog = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.blog.comments', compact('totalComment','cmnt_blog','show_blog','show_tag','single_blog','show_answer','show_support','show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function product_service_register(){
//        $single_product = Product::where('id', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        $show_slider = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $product_page = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        $show_service = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $show_support = Support::where('status', 1)->orderBy('id', 'desc')->get();
        $show_answer = CustomerQuestion::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.customer.register', compact('show_answer','show_support','show_slider', 'product_page', 'product_show', 'show_service'));
    }

    public function product_service_request(Request $request){
        $this->validate($request,[
            'name'      => 'required',
            'email'      => 'required',
            'phone_number'      => 'required',
            'state'      => 'required',
            'city'      => 'required',
            'address'      => 'required',
            'service'      => 'required',
            'service_details'      => 'required'
        ]);

        $service_request = new Register();
        $service_request->name = $request->name;
        $service_request->email = $request->email;
        $service_request->phone_number = $request->phone_number;
        $service_request->state = $request->state;
        $service_request->city = $request->city;
        $service_request->address = $request->address;
        $service_request->service = $request->service;
        $service_request->service_details = $request->service_details;
        if ($service_request->save()){
            return response()->json("success");
        }else{
            return response()->json("error");
        }
    }

    public function contactUs()
    {
        $product_show = Product::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.contact.contact', [
            'product_show' => $product_show,
        ]);
    }

    public function contactUsStore(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'message' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $contact = Contact::create([
            'product_id' => $request->product_id,
            'message' => $request->message,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('message', 'Your information has been successfully submitted. Thank you for Contact Us');
    }
}
