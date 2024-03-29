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
    // return view('coming-soon');
    return view('main.index');
});

Route::get('/login', function () {
    return view('main.login');
})->name('login');

Route::get('/register', function () {
    return view('main.register');
});

Route::get('/main/about', function () {
    return view('main.about');
});

Route::get('/main/contact', function () {
    return view('main.contact');
});

Route::get('/404', function () {
    return view('404');
});
Route::post('/login', [GeneralController::class, 'login']);
Route::get("/logout", [GeneralController::class, "logout"]);


Route::post('/register', [GeneralController::class, 'register']);

Route::get('/verifikasi/{id}', [GeneralController::class, 'verifikasiAkun']); 




//-----Admin Routes-----
//======================
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/logout', [AdminController::class, 'logout']);
});




//-----Vendor routes-----
//=======================
Route::group(['middleware' => ['auth', 'cekLevel:vendor']], function () {
    //----GET routes----
    //==================
    Route::get('/vendor/dashboard', function () {
        return view('main.index');
    });
    Route::get('/vendor/add-services', function () {
        return view('vendor.add-services');
    });
    Route::get('/vendor/my-services', [VendorController::class, 'myServices']);
    Route::get('/vendor/logout', [AdminController::class, 'logout']);
    Route::get('/vendor/my-services/edit/{id}', [VendorController::class, 'editServices']);
    
    //----POST routes----
    //===================
    Route::post('/vendor/add-services', [VendorController::class, 'VendorDataInput'])->name('vendor.add-services.store');
    
    //----PATCH request-----
    //=======================
    Route::patch('/vendor/my-services/edit/confirm', [VendorController::class, 'editServicesConfirm']);

    //----DELETE request-----
    //=======================
    Route::delete('/vendor/my-services/delete/{id}', [VendorController::class, 'deleteServices']);
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

    //-----Vendor List routes-----
    //===========================
    Route::get('/vendor-list', [GeneralController::class, 'vendorList']);

    Route::get('/vendor/services/{id}', [GeneralController::class, 'vendorServices']);

    //-----Event Organizer List routes-----
    //=====================================

    //-----Admin routes-----
    //======================
    Route::get('/admin/contact', [GeneralController::class, 'contactAdmin']);
});