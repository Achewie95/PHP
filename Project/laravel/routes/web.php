<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-database-connection', function () {
    $data = App\Models\User::all();
    return response()->json($data);
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [ProductController::class, 'authenticate'])->name('login.submit');

Route::get('/register', [ProductController::class, 'redirectToRegisterPage'])->name('register');

Route::post('/register', [ProductController::class, 'register'])->name('register.submit');

Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

Route::resource("product", ProductController::class);