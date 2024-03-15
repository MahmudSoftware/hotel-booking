<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Back\HotelController;
use App\Http\Controllers\Front\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
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
Route::get('/', [FrontEndController::class, 'index']);


Route::group(['middleware' => 'isAdmin'], function () {
    //All the routes that belongs to the group goes here
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/hotelDestroy', [HomeController::class, 'hotelDestroy'])->name('hotel.destroy');
    Route::get('/hotel/edit', [HomeController::class, 'hotelEdit'])->name('hotel.edit');
    Route::get('/hotel/deactive', [HomeController::class, 'hotelDeactive'])->name('hotel.deactive');
    Route::get('/hotel/active', [HomeController::class, 'hotelActive'])->name('hotel.active');
    Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.index');
    Route::post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');

     
    Route::get('/user/list', [HomeController::class, 'userList'])->name('user.list');
    Route::get('/admin/list', [HomeController::class, 'adminList'])->name('admin.list');

    Route::controller(BookingController::class)->prefix('booking')->group(function () {
        Route::get('/', 'index')->name('booking.index');
        Route::get('/store', 'store')->name('booking.store');
        // Route::get('/orders/{id}', 'show');
        // Route::post('/orders', 'store');
    });

});







Route::group(['middleware' => 'isUser'], function () {

    Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
    Route::get('/book/{id}', [FrontEndController::class, 'book'])->name('book');
    Route::post('submit/book', [FrontEndController::class, 'submitBook'])->name('submit.book');

});



Auth::routes();
// User Route
// Route::get('/user/login', [UserController::class, 'index'])->name('user.login');


