<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('website.index');
});   

Route::get('/index', function () {
    return view('website.index');
}); 