<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Livewire\Features\SupportTesting\get;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.home',[
          'blogs' =>  Blog::where('status',1)->orderBy('id','desc')->take(4)->get()
        ]);
    }
    public function blog(){
        return view('website.blog.blog',[
            'blogs' =>  Blog::where('status',1)->orderBy('id','desc')->get()
        ]);
    }
    public function blogDetail($id){
        return view('website.blog.blog-detail',[
            'blog' => Blog::find($id),
            'blogs' =>  Blog::where('status',1)->orderBy('id','desc')->take(4)->get()

        ]);
    }
    public function contact(){
        return view('website.contact.contact');
    }
}
