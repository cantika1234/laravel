<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',function(){
     return'Halaman Home';
});
// Route::get('/about', function(){
    // return 'Halaman About';
// });

// Route::get('/gallery', function(){
    // return'Halaman Gallery';
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
   return view('about', [
       "title" => "About",
     "nama" => "Nourma Islam Dewi Cantika",
     "email" => "santikapwt@gmail.com",
     "gambar" => "1240819.jpg"  
   ]);
});

Route::get('/', function () {
   return view('index', [
       "title" => "Beranda"
   ]);
});

Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});