<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       return view('website.index');
   }

   public function about()
   {
       return view('website.about');
   }
}
