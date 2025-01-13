<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PageController extends Controller
{
//    public function GuestHome()
//    {
//         return view('welcome');
//    }
   public function Home()
   {
        return view('User.dashboard');
   }
   public function categories()
   {
    $categories = Category::get();
     return view('layouts.categories')->with(['categories' => $categories]);
   }
   public function courses(){
      return view('layouts.courses');
   }
   public function insetructorDash(){
      return view('layouts.manage-courses');
   }


}
