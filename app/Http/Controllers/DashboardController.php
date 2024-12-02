<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
   function index()
   {

      $response = Http::get('http://localhost:3000/gigs/' . session('id'));
      $projects = $response->json();

      return view('dashboard', [
         "title" => "Your Dashboard",
         "projects" => $projects
      ]);
   }

   function addProductPage()
   {
      return view('addProject', [
         "title" => session('username') . " | Create a new Project"
      ]);
   }

   function saveProduct(Request $request)
   {

      $response = Http::post('http://localhost:3000/gigs', [
         "user_id" => $request->user_id,
         "project_name" => $request->projectTitle,
         "industry" => $request->industry,
         "project_duration" => $request->duration,
         "project_cost" => $request->price,
         "project_description" => $request->description,
         "image" => $request->file('image')->store('post-images'),
         "image2" => $request->file('image2')->store('post-images'),
         "phoneNumber" => $request->phoneNumber,
         "user_username" => $request->user_username,
         "user_description" => $request->user_description,
         "user_languages" => $request->user_languages,
         "user_location" => $request->user_location,
         "user_memberSince" => $request->user_memberSince,
         "user_image" => $request->user_image
      ]);

      if ($response->successful()) {
         return redirect('/dashboard');
      } else {
         return $response->status();
      }
   }

   function userEditPage()
   {
      return view('userEditPage', [
         "title" => session('username') . " profile edit"
      ]);
   }

   function updateUser(Request $request)
   {

      $oldImage = session('userImage');
      $imagePath = $oldImage;

      if ($request->hasFile('image')) {
         $imagePath = $request->file('image')->store('post-images');
      }

      $response = Http::patch('http://localhost:3000/users/' . session('id'), [
         "username" => $request->username,
         "phoneNumber" => $request->phoneNumber,
         "user_description" => $request->description,
         "user_country" => $request->user_country,
         "user_languages" => $request->user_languages,
         "password" => $request->password ? $request->password : "",
         "user_image" => $imagePath,
      ]);

      if ($response->successful()) {

         session([
            "username" => $request->username,
            "phoneNumber" => $request->phoneNumber,
            "userDescription" => $request->description,
            "userLanguages" => $request->user_languages,
            "userCountry" => $request->user_country,
            "userImage" => $imagePath,
         ]);

         return redirect('/dashboard');
      } else {
         return $response->status();
      }
   }
}
