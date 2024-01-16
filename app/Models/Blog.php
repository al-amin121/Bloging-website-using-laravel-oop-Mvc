<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Ramsey\Collection\element;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $newImage, $directory, $imgUrl ;

   public static function saveBlog($request)
   {
       self::$blog = new Blog();
       self::$blog->title = $request->title;
       self::$blog->category_id = $request->category_id;
       self::$blog->shortdescription = $request->shortdescription;
       self::$blog->image = self::saveImage($request);
       self::$blog->fulldescription = $request->fulldescription;
       self::$blog->save();
   }

   private static function saveImage($request){
       self::$image = $request->file('image');
       self::$newImage = rand().'.'.self::$image->extension();
       self::$directory = 'admin-assets/blog-images/';
       self::$imgUrl = self::$directory.self::$newImage;
       self::$image->move(self::$directory,self::$newImage);
       return self::$imgUrl;
   }

   public function categories(){
       return $this->belongsTo(Category::class,'category_id');
   }

   public static function updateBlog($request){
       self::$blog = Blog::find($request->id);
       self::$blog->title = $request->title;
       self::$blog->category_id = $request->category_id;
       self::$blog->shortdescription = $request->shortdescription;
       if ($request->file('image')){
           if (file_exists(self::$blog->image)){
               unlink(self::$blog->image);
           }
           self::$blog->image = self::saveImage($request);
       }
       self::$blog->fulldescription = $request->fulldescription;
       self::$blog->save();
   }
}
