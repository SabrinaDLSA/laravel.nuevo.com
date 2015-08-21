<?php

namespace nuevo\Http\Controllers;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;*/

class WelcomeController extends Controller{
/**
  *@return Response;
  *
  */
  public function index ()
  {
        return view('welcome');
  }
}
