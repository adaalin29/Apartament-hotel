<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Statice;
use App\Category;
use App\Apartament;

class ApartamentsController extends Controller
{
    
    
    public function index()
    {
      // $category = Category::with('apartamente')->get();
      // dd($category);
      $descriere = Statice::where("key","apartamentele-noastre-descriere")->first();
      $apartamente = Apartament::get();
      // dd($apartamente);
      return view('apartamente',[
        'descriere' =>$descriere,
        'apartamente' =>$apartamente,
        
      ]);
    }
}