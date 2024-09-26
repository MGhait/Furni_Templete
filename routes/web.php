<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(ThemeController::class)->name('theme.')->group(function (){
    Route::get('/about','about')->name('about');
    Route::get('/home','home')->name('home');
    Route::get('/contact','contact')->name('contact');
    Route::get('/blog','blog')->name('blog');
    Route::get('/services','services')->name('services');
    Route::get('/shop','shop')->name('shop');
    Route::post('/contact/store','store')->name('contact.store');
    Route::get('/getcontact','showContact')->name('getcontacts');
});

require __DIR__.'/auth.php';
