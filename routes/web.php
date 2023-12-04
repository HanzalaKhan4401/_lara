<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Custom;
use App\Http\Controllers\formControl;

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

// parameter pass in Route::get("/", function () {
// Route::get('/home/{name?}/{age?}', function ($name = null , $age = null) {
    // return view('welcome')->with(compact('name' , 'age'));
    // $data = compact('name' , 'age')
    // print_r($data);
// });

// url route DirectoryRoute::get('')
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/logout', function () {
//     return view('logout');
// });

// Route::get('/home', [Custom::class, 'index']);

// route::controller(Custom::class)->group(function(){
//     route::get('/', 'index')->name("home");
//     route::get('/about', 'about')->name("about");
//     // route::get('/contact', 'contact')->name("contact");
// });

route::get('/form', [formControl::class,'register']);
route::post('/form', [formControl::class,'data']);
route::get('/std/view', [formControl::class,'std_view']);
route::get('std/dlt/{id}', [formControl::class,'std_dlt'])->name('dlt');
