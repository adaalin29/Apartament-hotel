<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Photo;

class GalleryController extends Controller
{
    
    
    public function index()
    {
      $category = Category::get();
      $gallery = Photo::get();
      foreach($gallery as &$gal){
        $gal->images = json_decode($gal->images, true);
      }
      // dd($gallery);
      return view('galerie',[
        'category' =>$category,
        'gallery' =>$gallery,

      ]);
    }
}