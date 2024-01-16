<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private static $blog;
    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories' => Category::where('status',1)->get()
        ]);
    }

    public function saveBlog(Request $request){
        Blog::saveBlog($request);
        return back()->with('message','Blog Publish Successfully!');
    }

    public function manageBlog(){
        return view('admin.blog.manage-blog',[
            'blogs' => Blog::all()
        ]);
    }

    public function editBlog($id){
        return view('admin.blog.edit-blog',[
            'blogs' => Blog::find($id),
            'categories' => Category::where('status',1)->get()

        ]);
    }

    public function statusBlog($id){
       self::$blog = Blog::find($id);
       if (self::$blog->status ==1){
           self::$blog->status = 0;
       }else{
           self::$blog->status = 1;
       }
       self::$blog->save();
        return back()->with('message','Status is change');
    }

    public function deleteBlog(Request $request){
        self::$blog = Blog::find($request->id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();
        return back()->with('message','Blog delete successfully!');
    }

    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return back()->with('message','Blog Update Successfully!');
    }
}
