<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class Category extends Model
{
    use HasFactory;

    private static $category, $image, $newImage,$directory, $imageUrl;

    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }
    public static function getImageUrl($request){
       self::$image = $request->file('image');
       self::$newImage = rand().'.'.self::$image->extension();
       self::$directory = 'admin-assets/category-image/';
       self::$imageUrl = self::$directory.self::$newImage;
       self::$image->move(self::$directory,self::$newImage);
       return self::$imageUrl;
    }
    public static function updateCategory($request){
      self::$category = Category::find($request->id);
        self::$category->name = $request->name;
        if ($request->file('image')){
            if (file_exists(self::$category->image)){
              unlink(self::$category->image);
            }
            self::$category->image = self::getImageUrl($request);
        }
        self::$category->save();
    }
}
