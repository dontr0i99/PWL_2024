<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/hello', function () {
//     return 'Hello World';
//    });
// Route::get('/world', function () {    
//     return 'World'; 
//    });
// Route::get('/', function () {    
//     return 'Selamat Datang'; 
//    });
// Route::get('/about', function () {    
//     return '2241720053 <br>M. Tryo Bagus Anugerah Putra'; 
//    });
// Route::get('/user/{name?}', function ($name='John'){
//     return 'Nama Saya '.$name;
// });
// Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });
// Route::get('/articles/{id}', function ($id){
//     return 'Halaman Artikel dengan ID '.$id;
// });
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

Route::resource('photos', PhotoController::class);

// Route::get('/greeting', function () {  	return view('blog.hello', ['name' => 'Tryo']); 
// });
Route::get('/greeting', [WelcomeController::class, 
'greeting']);





