<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

//Index route
Route::get('/', function () {
    return view('main.index');
});

Route::get('/login', function () {
    return view('main.login');
});

Route::post('/login', [GeneralController::class, 'login']);
Route::get("/logout", [GeneralController::class, "logout"]);

Route::get('/register', function () {
    return view('main.register');
});

Route::post('/register', [GeneralController::class, 'register']);

Route::get('/verifikasi/{id}', [GeneralController::class, 'verifikasiAkun']); 

//Admin routes
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/logout', [AdminController::class, 'logout']);
});

//-----Vendor routes-----
//=======================
Route::group(['middleware' => ['auth', 'cekLevel:vendor']], function () {
    Route::get('/vendor/dashboard', function () {
        return view('main.index');
    });
    Route::get('/vendor/add-services', function () {
        return view('vendor.add-services');
    });
    Route::get('/vendor/my-services', [VendorController::class, 'myServices']);
    Route::get('/vendor/logout', [AdminController::class, 'logout']);

    Route::post('/vendor/add-services', [VendorController::class, 'VendorDataInput'])->name('vendor.add-services.store');
});

//-----Event Organizer routes-----
//===============================
Route::group(['middleware' => ['auth', 'cekLevel:event-organizer']], function () {
    Route::get('/event-organizer/dashboard', function () {
        return view('main.index');
    });
    Route::get('/event-organizer/add-events', function () {
        return view('event-organizer.add-events');
    });
    Route::get('/event-organizer/my-events', [EventOrganizerController::class, 'myEvents']);
    Route::get('/event-organizer/logout', [AdminController::class, 'logout']);
    Route::post('/event-organizer/add-events', [EventOrganizerController::class, 'EventDataInput'])->name('event-organizer.add-events.store');
});

//-----User routes-----
//=====================
Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
    Route::get('/user/dashboard', function () {
        return view('main.index');
    });
    Route::get('/user/logout', [AdminController::class, 'logout']);

    //-----User to Vendor routes-----
    //===============================
    Route::get('/user/join-vendor', function () {
        return view('user.join-vendor');
    });
    Route::post('/user/join-vendor', [GeneralController::class, 'vendorRegistration']);

    //-----User to Event Organizer routes-----
    //=========================================
    Route::get('/user/join-event-organizer', function () {
        return view('user.join-event-organizer');
    });
    Route::post('/user/join-event-organizer', [GeneralController::class, 'eventOrganizerRegistration']);
});