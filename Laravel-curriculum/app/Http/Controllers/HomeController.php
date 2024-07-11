<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Company;
use App\Models\User;

class HomeController extends Controller
{
  //top page
  public function top (): View {
    $companies = Company::all();
    return view('front.page.top', ['companies' => $companies]);
  }
}
