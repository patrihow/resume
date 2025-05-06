<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [ResumeController::class, 'index']);

Route::get('/home', [ResumeController::class, 'index']);
Route::get('/about', [ResumeController::class, 'about']);
Route::get('/resume', [ResumeController::class, 'resume']);
Route::get('/projets', [ResumeController::class, 'projets']);

Route::get('/contact', [ResumeController::class, 'contact']);
Route::post('/contact', [ResumeController::class, 'contactForm']);
