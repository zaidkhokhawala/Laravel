<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('website.main.index');
})->name('index');


Route::get('/user_login', function () {
    return view('website.auth.login');
})->name('user_login');


Route::get('/user_register', function () {
    return view('website.auth.register');
})->name('user_register');


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

// authadmin routes



// Login form route - agar login ho chuka hai to dashboard bheje
Route::get('/admin_login', [AdminController::class, 'loginForm'])
    ->name('admin_login')->middleware('admin_before_login');
    

// Login check
Route::post('/admin_login', [AdminController::class, 'loginCheck'])
    ->name('admin.login.check')->middleware('admin_before_login');



// Logout
 Route::middleware('admin_after_login')->group(function () {
Route::post('/admin_logout', [AdminController::class, 'destroy'])
    ->name('admin_logout');



Route::get('/admin_index', function () {
    return view('admin.main.index');
})->name('admin_index');

Route::get('/manage_user', function () {
    return view('admin.main.manage_user');
})->name('manage_user');

Route::get('/add_product', [ProductController::class, 'create'])->name('add_product');
Route::post('/add_product', [ProductController::class, 'store'])->name('products.store');
Route::get('/manage_product', [ProductController::class, 'index'])->name('manage_product');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/update_product/{id}', [ProductController::class, 'update'])->name('products.update');




Route::get('/add_cat', [CategoryController::class, 'create'])->name('add_cat');
// for add form value in database
Route::post('/add_cat', [CategoryController::class, 'store'])->name('store_cat');
// Show edit form
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

// Update category
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('/manage_cat', [CategoryController::class, 'index'])->name('manage_cat');


Route::get('/add_offer', function () {
    return view('admin.main.add_offer');
})->name('add_offer');

Route::get('/manage_offer', function () {
    return view('admin.main.manage_offer');
})->name('manage_offer');

Route::get('/add_blog', function () {
    return view('admin.main.add_blog');
})->name('add_blog');

Route::get('/manage_blog', function () {
    return view('admin.main.manage_blog');
})->name('manage_blog');

 });




