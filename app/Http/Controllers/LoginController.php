<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
   function index(Request $request)
   {
      $response = Http::post('http://localhost:3000/users/login', [
         "username" => $request->username,
         "password" => $request->password
      ]);

      if ($response->successful()) {

         $userData = $response->json();

         // dd($userData);

         if (isset($userData['user']['username']) && isset($userData['user']['id'])) {
            $request->session()->put('username', $userData['user']['username']);
            $request->session()->put('id', $userData['user']['id']);
            $request->session()->put('userDescription', $userData['user']['description']);
            $request->session()->put('userImage', $userData['user']['image']);
            $request->session()->put('userSkills', $userData['user']['skills']);
            $request->session()->put('userLanguages', $userData['user']['languages']);
            $request->session()->put('memberYear', $userData['user']['memberSince']);
            $request->session()->put('phoneNumber', $userData['user']['phoneNumber']);
            $request->session()->put('userCountry', $userData['user']['country']);
         }

         return redirect('/service');
      } else {
         return $response->status();
      }
   }

   function logout(Request $request)
   {

      $request->session()->flush();
      return redirect('/loginPage');
   }
}
