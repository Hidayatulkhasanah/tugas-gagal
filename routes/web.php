<?php

use App\Http\Controllers\Homecontroller;
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

// nah disini kan aku bikin 3 route

Route::get('/', function () { // yg ini route utama atau base route, ini diakses kalo url kita http://localhost:8000/
    return view('welcome');
});

// nah ini base practicenya, dia bakal panggil controller apa (HomeController), terus functionnya aoa (bagian1-bagian3)

Route::get('/home/bagian1',[HomeController::class, 'bagian1']);
Route::get('/home/bagian2',[HomeController::class, 'bagian2']);
Route::get('/home/bagian3',[HomeController::class, 'bagian3']);

// jadi cara baca flow (alurnya), pertama url apa yg mau kita buat (/home/bagian1) berarti ini diaksesnya http://localhost:8000/home/bagian1
// terus dia di arahin ke controller mana (HomeController::class)
// terus diarahin ke function mana di home controller itu (bagian1)

Route::get('/about', function () { // yg ini route about, ini diakses kalo url kita http://localhost:8000/about
    return 'ini halaman about';
});


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[HomeController::class,'index']);

// Route::get('/about', function () {
//     return view('about');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
