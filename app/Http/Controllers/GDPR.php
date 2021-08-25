<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class GDPR extends Controller
{
    
    
    public function termeni()
    {
      return view('termeni');
    }
    public function politica()
    {
      return view('politica');
    }
    public function confidentialitate()
    {
      return view('confidentialitate');
    }
}