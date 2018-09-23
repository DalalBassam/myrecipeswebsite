<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
      public function index()

      {
        $categories =Category::all();
          return view('posts.create')->with('categories',$categories);

  }


  public function show($id)
  {

       $categories= Category::find($id);

     return view('category')->with('categories',$categories);
  }




}
