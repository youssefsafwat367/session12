<?php

use App\Models\Doctor;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadManager;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

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
// -----------------------------   for users -------------------------
// homepage
Route::get('/', function () {
    return view('front.home');
})->name("Home_Page");
//majors page
Route::get('/majors', function () {
    return view('front.majors');
})->name("Majors_Page");
//doctors page
Route::get('/doctors', function () {
    return view('front.doctors');
})->name("Doctors_Page");
//login page
Route::get('/login', function () {
    return view('front.login');
})->name("Login_Page");
//booking page
Route::get('/booking', function () {
    return view('front.booking');
})->name("Booking_Page");
//register page
Route::get('/register', function () {
    return view('front.register');
})->name("Register_Page");
//contact page
Route::get('/contact', function () {
    return view('front.contact');
})->name("Contact_Page");
// ----------------------------------------------   for admins ------------------------------------------------------
//home page
Route::get('/home', function () {
    return view('admin.index');
})->name("Admin_Home_page");
//-------------------------------Users page--------------------------------------
// view users
Route::get('/admin/users', 'UserController@index')->name("View_Users");
// create user
Route::get('/admin/users/create', [UserController::class, 'create'])->name("Users.create");
Route::post('/admin/users/store', [UserController::class, 'store'])->name("Users.store");
// edit user
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name("Users.edit");
Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name("Users.update");
// Delete user
Route::delete('/admin/users/{id}', 'UserController@destroy')->name("Users.Delete");
//-------------------------------Majors page--------------------------------------
// view users
Route::get('/admin/majors', [MajorController::class, 'index'])->name("View_Majors");
// create major
Route::get('/admin/majors/create', [MajorController::class, 'create'])->name("Majors.create");
Route::post('/admin/majors/store', [MajorController::class, 'store'])->name("Majors.store");
// edit major
Route::get('/admin/majors/edit/{id}', [MajorController::class, 'edit'])->name("majors.edit");
Route::put('/admin/majors/update/{id}', [MajorController::class, 'update'])->name("majors.update");
// Delete major
Route::delete('/admin/majors/{id}', [MajorController::class, 'destroy'])->name("majors.Delete");
//-------------------------------doctors page--------------------------------------
// view users
Route::get('/admin/doctors', [DoctorController::class, 'index'])->name("View_Doctors");
// create Doctor
Route::get('/admin/doctors/create', [DoctorController::class, 'create'])->name("doctors.create");
Route::post('/admin/doctors/store', [DoctorController::class, 'store'])->name("doctors.store");
// edit Doctor
Route::get('/admin/doctors/edit/{id}', [DoctorController::class, 'edit'])->name("doctors.edit");
Route::put('/admin/doctors/update/{id}', [DoctorController::class, 'update'])->name("doctors.update");
// Delete Doctor
Route::delete('/admin/doctors/{id}', [DoctorController::class, 'destroy'])->name("doctors.delete");
//-------------------------------Contacts page--------------------------------------
// view contacts
Route::get('/admin/contacts', [ContactController::class, 'index'])->name("View_Contacts");
Route::post("/admin/contacts/create/id", [ContactController::class, "store"])->name("contacts.store");
// Delete contact
Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name("contacts.delete");
//-------------------------------Booking page--------------------------------------
// view bookings
Route::get('/admin/bookings', [BookingController::class, 'index'])->name("View_Bookings");
// Edit booking
Route::get('/admin/booking/edit/{id}/{status}', [BookingController::class, 'edit'])->name("bookings.edit");
Route::put('/admin/booking/update/{id}', [BookingController::class, 'update'])->name("bookings.update");
Route::delete('/admin/bookings/{id}', [BookingController::class, 'destroy'])->name("bookings.delete");
