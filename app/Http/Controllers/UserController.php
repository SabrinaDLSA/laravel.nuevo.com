<?php

namespace nuevo\Http\Controllers;

use Illuminate\Http\Request;

use nuevo\Http\Requests;
use nuevo\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
        return view('desktop')
    }
    public function logout(){
      \Auth::logout();
    }
    public function profile(){
      return view('profile');
    }
}
