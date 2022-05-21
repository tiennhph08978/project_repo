<?php

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

use Illuminate\Support\Facades\Route;
use Modules\FrontEnd\Http\Controllers\AboutController;
use Modules\FrontEnd\Http\Controllers\ContactController;
use Modules\FrontEnd\Http\Controllers\HomeController;
use Modules\FrontEnd\Http\Controllers\OrderController;
use Modules\FrontEnd\Http\Controllers\ProjectController;

Route::prefix('frontend')->group(function() {
    Route::get('/', 'FrontEndController@index');
});
//login
Route::get('login', function (){
    return view('frontend::auth.login');
})->name('login');
Route::get('register', function (){
    return view('frontend::auth.register');
})->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our_product', [HomeController::class, 'detail'])->name('our_product');
Route::get('/about_us', [AboutController::class, 'index'])->name('about_us');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/contact_us', [ContactController::class, 'index'])->name('contact_us');
Route::get('/enquiry', [OrderController::class, 'index'])->name('enquiry');
Route::post('/about_us', [ContactController::class, 'store'])->name('send.email');

