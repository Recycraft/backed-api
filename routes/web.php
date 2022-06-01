<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HandicraftController;
use App\Http\Controllers\ScrapCategoryController;
use App\Http\Resources\ScrapCategoryResource;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::get('/register', 'registerIndex')->name('register');
    Route::post('/register', 'register');
});

Route::middleware(['admin', 'auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('dashboard');
        Route::get('/admin/setting', 'setting')->name('setting');
    
        #Users
        Route::get('/admin/users', 'index')->name('users');
    
    });
    #Scraps Categories
    Route::controller(ScrapCategoryController::class)->group(function () {
        Route::get('/admin/scrap', 'index')->name('scrap.index');
        Route::get('/admin/scrap/create', 'create')->name('scrap.create');
        Route::get('/admin/scrap/{scrapCategory:slug}', 'show')->name('scrap.show');
        Route::get('/admin/scrap/{scrapCategory:slug}/edit', 'edit')->name('scrap.edit');
        Route::delete('/admin/scrap/{scrapCategory:slug}', 'destroy')->name('scrap.destroy');
    });
    

    #Handicrafts
    Route::get('/admin/handicrafts', [HandicraftController::class, 'index'])->name('handicrafts');
    // Route::post('/dashboard/handicrafts/{handicrafts:id}/edit', [HandicraftController::class, 'update']);
    // Route::delete('/dashboard/handicrafts', [HandicraftController::class, 'destroy']);
});

