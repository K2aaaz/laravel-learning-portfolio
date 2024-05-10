<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
  //top page
  public function top (): View {
    return view('front.page.top');
  }

  //about page
  public function about (): View {
    return view('front.page.about');
  }
}
