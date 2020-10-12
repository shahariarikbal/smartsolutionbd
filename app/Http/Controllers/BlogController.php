<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Tag;
use http\Env\Response;
use Illuminate\Http\Request;
use Image;
use Auth;
class BlogController extends Controller
{
    public function add_blog(){
        $show_blog = Blog::orderBy('id', 'desc')->paginate(5);
        return view('back.blog.add-blog', compact('show_blog'));
    }

    public function save_blog_post(Request $request){
        $this->validate($request,[
            'title'   => 'required|max:255',
            'description'   => 'required',
            'images'   => 'required',
        ]);

        $save_blog = new Blog();

        if ($request->hasFile('images')){
            $productImage = $request->file('images');
            $imageName = $productImage->getClientOriginalName();
            $fileName = time().'_blog_image_'.$imageName;
            $directory = public_path('/blog-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($productImage)->save($coursesImgUrl);
            $save_blog->images = $fileName;
        }
        $save_blog->user_id = Auth::user()->id;
        $save_blog->title = $request->title;
        $save_blog->description = $request->description;
        $save_blog->save();
        return redirect()->back()->with('message', 'Blog Post has been Saved');
    }

    public function active_blog_post($id){
        $active_blog = Blog::find($id);
        $active_blog->status = 0;
        $active_blog->save();
        return redirect()->back()->with('message', 'Blog Post has been Pending');
    }
    public function pending_blog_post($id){
        $pending_blog = Blog::find($id);
        $pending_blog->status = 1;
        $pending_blog->save();
        return redirect()->back()->with('message', 'Blog Post has been Active');
    }

    public function delete_blog_post($id){
        $delete_blog = Blog::find($id);
        $delete_blog->delete();
        return redirect()->back()->with('message', 'Blog Post has been Deleted');
    }

    //TagController

    public function add_tag(){
        $show_tag = Tag::orderBy('id', 'desc')->paginate(5);
        return view('back.blog.tag', compact('show_tag'));
    }

    public function save_blog_tag(Request $request){
        $this->validate($request,[
            'tag_name'   => 'required|max:255',
        ]);

        $save_tag = new Tag();
        $save_tag->user_id = Auth::user()->id;
        $save_tag->tag_name = $request->tag_name;
        if ($save_tag->save()){
            return response()->json('success');
        }else{
            return response()->json("error");
        }
    }

    public function active_blog_tag($id){
        $active_tag = Tag::find($id);
        $active_tag->status = 0;
        $active_tag->save();
        return redirect()->back()->with('message', 'Blog Tag has been Pending');
    }
    public function pending_blog_tag($id){
        $pending_tag = Tag::find($id);
        $pending_tag->status = 1;
        $pending_tag->save();
        return redirect()->back()->with('message', 'Blog Tag has been Active');
    }

    public function delete_blog_tag($id){
        $delete_blog = Tag::find($id);
        $delete_blog->delete();
        return redirect()->back()->with('message', 'Blog Tag has been Deleted');
    }
}
