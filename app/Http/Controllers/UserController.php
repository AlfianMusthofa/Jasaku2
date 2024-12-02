<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function userEditPage()
   {
      return view('userEditPage', [
         "title" => session('username') . " profile edit"
      ]);
   }
}
