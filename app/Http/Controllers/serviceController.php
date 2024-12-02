<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class serviceController extends Controller
{
   function index()
   {

      $response = Http::get('http://localhost:3000/gigs?limit=7');
      $finances = Http::get('http://localhost:3000/gigs/industry/Finance?limit=7');
      $programmings = Http::get('http://localhost:3000/gigs/industry/Programming%20%26%20Tech?limit=7');
      $videos = Http::get('http://localhost:3000/gigs/industry/Video%20%26%20Animation?limit=7');

      $products = $response->json();
      $finances = $finances->json();
      $programmings = $programmings->json();
      $videos = $videos->json();

      return view('service', [
         "title" => 'Jasaku | Aneka Jasa',
         "products" => $products,
         "finances" => $finances,
         "programmings" => $programmings,
         "videos" => $videos
      ]);
   }
}
