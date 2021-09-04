<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotifyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/formation', function () {
    return view('pages.formation');
});

Route::get('/produit', function () {
    return view('pages.product');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/agriculture', function () {
    return view('pages.agriculture');
});




Route::post('/newsletter', [NotifyController::class, 'store'])->name('notify.store');
Route::post('/contact-form', [ContactController::class, 'storeForm'])->name('contact.save');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
