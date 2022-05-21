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
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\ContactController;
use Modules\Admin\Http\Controllers\OrderController;
use Modules\Admin\Http\Controllers\UserController;

Route::prefix('admin')->group(function() {
    //login
    Route::get('login', function (){
        return view('admin::auth.login');
    });
    //dashboard
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('products', ProductController::class);
    Route::resource('projects', ProjectController::class);
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('order', [OrderController::class, 'index'])->name('order');
});
