<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
   function index($id)
   {
      $response = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $project = $response->json();

      return view('productPage', [
         "title" => "Product Page",
         "project" => $project
      ]);
   }

   function productDetail($id)
   {

      $response = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $project = $response->json();

      return view('productDetail', [
         "title" => "Product Detail",
         "project" => $project
      ]);
   }

   function deleteProject($id)
   {
      $response = Http::delete('http://localhost:3000/gigs/' . $id);

      if ($response->successful()) {
         return redirect('/dashboard');
      } else {
         return $response->status();
      }
   }

   function updateProjectPage($id)
   {
      $getUrl = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $project = $getUrl->json();

      return view('productEdit', [
         "title" => "Edit Project",
         "project" => $project
      ]);
   }

   function updateProject(Request $request, $id)
   {

      $singleProject = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $getImage = $singleProject->json();

      $oldImage = $getImage['image'];

      if ($request->hasFile('image') && $request->hasFile('image2')) {
         $oldImage = $request->file('image')->store('post-images');
      } else {
         $imagePath = $oldImage;
      }

      $response = Http::patch('http://localhost:3000/gigs/' . $id, [
         "project_name" => $request->projectTitle,
         "industry" => $request->industry,
         "project_duration" => $request->duration,
         "project_cost" => $request->price,
         "project_description" => $request->description,
         "image" => $imagePath,
      ]);

      if ($response->successful()) {
         return redirect('/dashboard');
      } else {
         return $response->status();
      }
   }
}
