<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome'); // Make sure you have a welcome.blade.php view
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [RegisterController::class, 'login']);

Route::get('/home', function () {
    return view('auth.home'); // Pastikan view home.blade.php sudah ada
})->name('home');

Route::get('/auth/skincare', function () {
    return view('auth.skincare');
});

Route::get('/auth/makeup', function () {
    return view('auth.makeup');
});

Route::get('/auth/products', function () {
    return view('auth.products');
});