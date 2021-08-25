<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Statice;
use App\Category;
use Validator;
use App\Mail\SendReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    
    
    public function index()
    {
      $category = Category::get();
      $indexBannerTitlu = Statice::where("key","banner-titlu")->first();
      $indexBannerSubtitlu = Statice::where("key","idnex-banner-subtitlu")->first();
      $bannerImage = Statice::where("key","banner-image")->first();
      $despreTitlu = Statice::where("key","despre-titlu")->first();
      $despreDescriere = Statice::where("key","despre-descriere")->first();
      $desprePoza = Statice::where("key","despre-poza")->first();
      return view('index',[
        'indexBannerTitlu'=>$indexBannerTitlu,
        'indexBannerSubtitlu'=>$indexBannerSubtitlu,
        'bannerImage'=>$bannerImage,
        'despreTitlu'=>$despreTitlu,
        'despreDescriere'=>$despreDescriere,
        'desprePoza'=>$desprePoza,
        'category'=>$category,
      ]);
    }

    public function send_message(Request $request){
      $contact_email = setting('site.reservation-mail');

      $form_data = $request->only(['data_sosire','data_plecare','numar_persoane','apartament','nume','telefon','email','mesaj']);
      $validationRules = [
          'data_sosire'    => ['required','min:3'],           
          'data_plecare'    => ['required','min:3'],           
          'numar_persoane'    => ['required','min:1'],           
          'apartament'    => ['required','min:1'],           
          'nume'    => ['required','min:1'],           
          'telefon'    => ['required','min:1'],           
          'email'    => ['required','min:1'],           
          'mesaj'    => ['required','min:1'],           
        
      ];
      $validator = Validator::make($form_data, $validationRules);
      if ($validator->fails())
          return ['success' => false, 'error' => $validator->errors()->all()];  
      else{
          // $date_de_salvat = MessageContact::create($request->all()); 
          Mail::to(strip_tags($contact_email))->send(new SendReservation($request->all()));

          return ['success' => true,'successMessage'=> 'Mesajul a fost trimis cu succes'];
      }      
  }
}