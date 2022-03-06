<?php

use App\Http\Controllers\PageController;
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

//Routing
Route::get('/', [HomeController::class, 'home']);

//Routing Prefix
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', function){
        return ' Pada Halaman ini menampilkan kategori Marbel Education Games';
    });
Route::get('/marbel-and-friends-kids-games', function(){
    return ' Pada Halaman ini menampilkan kategori Marbel And Friends kids games';
});

Route::get('/riri-story-books', function(){
    return ' Pada Halaman ini menampilkan kategori Riry Story Books';
});

Route::get('/kolak-kids-song', function(){
    return ' Pada Halaman ini menampilkan kategori Kolak Kids Songs';
 });
});

//routing parameter
Route::get('/news' ,function(){
    return 'news page';
});
Route::get('/news/{id}', function($id){
    return 'ID : '.$id;
});

Route::prefix('/program')->group(function () {
    Route::get('/karir'             , function () { return ' Pada halaman ini menampilkan program karir';              });
    Route::get('/magang'            , function () { return ' Pada halaman ini menampilkan program magang';             });
    Route::get('/kunjungan-industri', function () { return ' Pada halaman ini menampilkan program kunjungan-industri'; });
});

// Routing untuk Halaman About Us
Route::get('/about-us', function () { return 'about-us'; }); 

//Routing Halaman Contact Us
Route::resource('contact-us', function () { return 'resources Contact Us'; });




