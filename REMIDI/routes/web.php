<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller; 
Route::get('/home', [BlogController::class, 'home']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/about', [BlogController::class, 'about']);

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/halamandua', function () {
//     return view('halamandua');
// });
// Route::get('/halamantiga', function () {
//     return view('halamantiga');
// });
// Route::get('/fitur', function () {
//     return view('fitur',['nama' => 'selamat datang beban keluarga']);
// });

// Route::get('/product/{id}', function ($id) {
//     $product=[
//         'id' => $id,
//         'barang' =>'ticket',
//         'harga' => 100000
//     ];
//     return view('product', ['product' =>$product]);
// });
