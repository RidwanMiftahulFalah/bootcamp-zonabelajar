<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
  return view('welcome');
});

// Menggunakan metode Resource Controller
Route::resource('users', UserController::class);

// Menggunakan metode reguler
// Route::prefix('users')->group(function () {
//   Route::name('users.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');

//     Route::get('/create', [UserController::class, 'create'])->name('create');
//     Route::post('/store', [UserController::class, 'store'])->name('store');

//     Route::get('/edit', [UserController::class, 'edit'])->name('edit');
//     Route::post('/update', [UserController::class, 'update'])->name('update');

//     Route::post('/destroy', [UserController::class, 'destroy'])->name('destroy');
//   });
// });
