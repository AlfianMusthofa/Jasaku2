<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SignupController extends Controller
{
   function index(Request $request)
   {

      $response = Http::post('http://localhost:3000/users', [
         "username" => $request->username,
         "password" => $request->password,
         "phoneNumber" => $request->phonenumber,
         "dateBorn" => $request->date,
         "gender" => $request->gender,
         "user_image" => $request->image ?? "",
         "user_description" => $request->desc ?? "",
         "user_languages" => $request->lang ?? "",
         "user_skills" => $request->skill ?? null,
         "member_since" => $request->member ?? "2024-01-01",
         "certified" => $request->certif ?? null,
         "user_country" => $request->country ?? ""
      ]);



      if ($response->successful()) {

         $userData = $response->json();

         // $request->session()->put('username', $userData['user']['username']);
         // $request->session()->put('id', $userData['user']['id']);
         // $request->session()->put('userDescription', $userData['user']['description']);
         // $request->session()->put('userImage', $userData['user']['image']);
         // $request->session()->put('userSkills', $userData['user']['skills']);
         // $request->session()->put('userLanguages', $userData['user']['languages']);
         // $request->session()->put('memberYear', $userData['user']['memberSince']);
         // $request->session()->put('phoneNumber', $userData['user']['phoneNumber']);
         // $request->session()->put('userCountry', $userData['user']['country']);

         return redirect('/service');
      } else {
         return $response->status();
      }
   }
}
