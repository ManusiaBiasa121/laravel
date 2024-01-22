<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerContact;

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
    return view('home' , [ "title" => "Home"]);
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/biodata', function () {
    return view('biodata' , [ "title" => "Biodata"]);
});

Route::get('/about', function () {
    return view('about' , [ "title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact' , [ "tlp" => "0892925275258"] , [ "title" => "Contact"]);
});


Route::get('/sekola', function () {
    return view('index');
});


Route::get('/contactwebkola', [ControllerContact::class, 'index']);
Route::post('/contactwebkola', [ControllerContact::class, 'store']); 
