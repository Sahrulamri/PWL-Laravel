<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
    //return 'Halaman Utama';
});
Route::get('/about', function () {
    return view('about');
    //return 'halaman Utama';
});
Route::get('/contact', function () {
    return view('contact');
});
//Route::get('/produk', function(){
//   return view('produk');
//});

Route::resource('produk', ProdukController::class);