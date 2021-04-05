<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/gallery.blade.php', function(){
    return view('gallery');
});
Route::get('/brands.blade.php', function(){
    return view('brands');
});
Route::get('/aboutus.blade.php', function(){
    return view('aboutus');
});
Route::get('/contactus.blade.php', function(){
    return view('contactus');
});
Route::get('/cars.blade.php', function(){
    return view('cars');
});
Route::get('/trucks.blade.php', function(){
    return view('trucks');
});
Route::get('/xc40.blade.php', function(){
    return view('xc40');
});
Route::get('/form.blade.php', function(){
    return view('form');
});
Route::get('/xc60.blade.php', function(){
    return view('xc60');
});
Route::get('/xc90.blade.php', function(){
    return view('xc90');
});
Route::get('/xc90r.blade.php', function(){
    return view('xc90r');
});
Route::get('/xc40r.blade.php', function(){
    return view('xc40r');
});
Route::get('/s60.blade.php', function(){
    return view('s60');
});
Route::get('/vid.blade.php', function(){
    return view('vid');
});