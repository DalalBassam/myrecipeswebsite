<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
	
    function about() {
        $name= 'about';
        return view('pages.about')->with('name',$name );
      }


}
