<?php

use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);
Route::post('/signup', [SignupController::class, 'index']);
Route::get('/service', [serviceController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/addProductPage', [DashboardController::class, 'addProductPage']);
Route::get('/dashboard/productPage/{id}', [ProductController::class, 'index']);
Route::post('/saveProduct', [DashboardController::class, 'saveProduct']);
Route::get('/service/productDetail/{id}', [ProductController::class, 'productDetail']);
Route::get('/dashboard/userEdit/{id}', [DashboardController::class, 'userEditPage']);
Route::post('/dashboard/userEdit/{id}', [DashboardController::class, 'updateUser']);
Route::delete('/delete/{id}', [ProductController::class, 'deleteProject']);
Route::get('/projectEdit/{id}', [ProductController::class, 'updateProjectPage']);
Route::post('/projectEdit/{id}', [ProductController::class, 'updateProject']);
Route::post('/delete/{id}', [ProductController::class, 'deleteProject']);
Route::get('/allCategory', [AllCategoryController::class, 'index']);

Route::get('/loginPage', function () {
   return view('login', [
      "title" => "Login"
   ]);
});

Route::get('/signup', function () {
   return view('signup', [
      "title" => 'Sign Up'
   ]);
});
