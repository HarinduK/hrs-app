<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingDetailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreditCardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin/login', function () {
    return view('adminlogin');
})->name('admin-login');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/token', function () {
    return csrf_token();
});

Route::get('/room/{room}', function () {
    return view('room');
});

Route::get('/hotellist', function () {
    return view('hotellist');
});

Route::get('/reservation/{id}', function () {
    return view('reservation');
});

Route::get('/revenuereport', function () {
    return view('reportrevenue');
});

Route::get('/creditcard', function () {
    return view('creditcard');
});

Route::get('/reservationlist', function () {
    return view('reservationlist');
});

//hotel
Route::post('/hotel', [HotelController::class,'save']);
Route::post('/hotel/{id}', [HotelController::class,'update']);
Route::get('/hotels', [HotelController::class,'allHotels']);
Route::get('/hotel/{id}', [HotelController::class,'searchHotel']);

//room
Route::post('/room', [RoomController::class,'save']);
Route::get('/rooms/{id}', [RoomController::class,'searchRoomsByHotel']);
Route::get('/findroom/{id}', [RoomController::class,'searchRoom']);
Route::post('/room/{id}', [RoomController::class,'update']);


//guest
Route::post('/guest', [GuestController::class,'save']);

//booking
Route::post('/reservation', [BookingController::class,'save']);
Route::get('/remove', [BookingController::class,'remove']);
Route::get('/revenue', [BookingController::class,'revenue']);
Route::get('/rslist', [BookingController::class,'list']);
Route::post('/rsstatus', [BookingController::class,'changeStatus']);

//bookingDetails
Route::post('/bookingDetails', [BookingDetailsController::class,'save']);

//user/auth
Route::post('/register', [UserController::class,'create']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/signout', [UserController::class, 'signOut']);


//credit card
Route::post('/cc', [CreditCardController::class,'save']);
// Route::post('/hotel/{id}', [HotelController::class,'update']);
Route::get('/cc', [CreditCardController::class,'get']);
// Route::get('/hotel/{id}', [HotelController::class,'searchHotel']);
