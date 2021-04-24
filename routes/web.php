<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class,'welcome']);
Route::get('/home', [HomeController::class,'home']);
Route::get('/profile', [ProfileController::class,'profile']);
Route::get('blog/event', [BlogController::class,'event']);
Route::get('blog/article', [BlogController::class,'article']);
Route::get('/career', [CareerController::class,'career']);
Route::get('/contact-us', [ContactUsController::class,'contactus']);