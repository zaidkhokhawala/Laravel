<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('website.main.index');
})->name('index');

Route::get('/collection', function () {
    return view('website.main.collection');
})->name('collection');

Route::get('/offer', function () {
    return view('website.main.offer');
})->name('offer');

Route::get('/blog', function () {
    return view('website.main.blog');
})->name('blog');

Route::get('/app_d', function () {
    return view('website.main.app_d');
})->name('app_d');

Route::get('/cart', function () {
    return view('website.main.cart');
})->name('cart');


// admin routes
Route::get('/admin_index', function () {
    return view('admin.main.index');
})->name('admin_index');


Route::get('/add_product', function () {
    return view('admin.main.add_product');
})->name('add_product');

Route::get('/mange_product', function () {
    return view('admin.main.manage_product');
})->name('manage_product');