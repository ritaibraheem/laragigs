<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts', function (Request $request) {
//     return 'hi';
// });

// Route::get('/posts', function () {
//     return response()->json([
//         'posts' => [
//             ['title' => 'Post One']
//         ]
//     ]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });
