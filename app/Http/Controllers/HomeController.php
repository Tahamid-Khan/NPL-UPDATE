<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
         return view('home.index');
   }
   public function about(){
    return view('home.about');
}
 public function newsevent(){
    return view('home.newsevent');
}
public function executivecommittee(){
    return view('home.executivecommittee');
}
public function contactus(){
    return view('home.contactus');
}
}