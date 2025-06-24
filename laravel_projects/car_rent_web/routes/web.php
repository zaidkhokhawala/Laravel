<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('website.main.index');
})->name('index');

// Table Routes
Route::get('/table', [ProjectController::class, 'index']);
Route::delete('/table/{id}', [ProjectController::class, 'destroy'])->name('contact.delete');

// Auth Routes
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/register', [AdminController::class, 'store'])->name('register.form');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'cheklogin'])->name('login.check'); // ✅ change this to POST

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

?>