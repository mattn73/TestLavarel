<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{




   
    
    public function getIndex()
    {
        return view('page.index');
    }

      public function getContact()
    {
        return view('page.contact');
    }   

    public function create()
    {


       
    }

    
   
    
}
