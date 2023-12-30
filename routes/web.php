<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('/', [homecontroller::class, 'homepage']);

Route::get('/LoginUser', function () {
    return view('LoginUser');
});

Route::get('/RegisterUser', function () {
    return view('RegisterUser');
});

Route::get('/UpdateProfile', function () {
    return view('UpdateProfile');
});

Route::get('/DetailPage/{id}', [DetailPageController::class, 'AccessDetail'])->name('detail.page');

Route::post('/processRegister', [UserController::class, 'registerUser'])->name("registerUser");

Route::get('/processLogin', [UserController::class, 'loginUser'])->name("loginUser");


Route::post('/loginUser', 'UserController@login')->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/UpdateProfile', [UserController::class, 'showUserData']);
});

Route::get('/logout', function () {
    Auth::logout();
    return view('test(buat ngetest cookie dari auth)');
})->name('logout');

Route::put('/UpdateProfile', [UserController::class, 'updateProfile'])->name('users.update');

Route::get('/payment', [PaymentController::class, 'payment']);

Route::post('/payment', [PaymentController::class, 'validation'])->name('PaymentController.validation');

//default routing dari template (kita kayaknya gak pake)
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
