<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  public function about()
  {
    $users = User::with('company')->get();
    return view('front.page.about', ['users' => $users]);
  }
}
