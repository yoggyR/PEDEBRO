<?php

use App\Http\Controllers\M_UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontPages.home', [
        "title" => "home"
    ]);
});
Route::get('/job', function () {
    return view('frontPages.jobVacancies', [
        "title" => "job"
    ]);
});
Route::get('/about', function () {
    return view('frontPages.aboutUs', [
        "title" => "about"
    ]);
});
Route::get('/myProfile', function () {
    return view('frontPages.myProfile', [
        "title" => "myProfile"
    ]);
});
Route::get('/applicationHistory', function () {
    return view('frontPages.applicationHistory', [
        "title" => "applicationHistory"
    ]);
});
Route::get('/changePassword', function () {
    return view('frontPages.changePassword', [
        "title" => "changePassword"
    ]);
});

// back
Route::get('/dashboard', function () {
    return view('backPages.dashboard', [
        "title" => "dashboard"
    ]);
});
Route::get('/opened', function () {
    return view('backPages.opened', [
        "title" => "opened"
    ]);
});
Route::get('/nJob', function () {
    return view('backPages.newJob', [
        "title" => "nJob"
    ]);
});
Route::get('/eJob', function () {
    return view('backPages.editJob', [
        "title" => "eJob"
    ]);
});
Route::get('/closed', function () {
    return view('backPages.closed', [
        "title" => "closed"
    ]);
});


// Recruiter list
Route::get('/RecruiterList', [M_UsersController::class, 'indexRL'])->name('ShowRecruiterList');
// Add new recruiter
Route::get('/AddNewRecruiter', [M_UsersController::class, 'createRL'])->name('FormAddRecruiter');
Route::post('/AddRecruiter', [M_UsersController::class, 'storeRL'])->name('AddRecruiter');
// Delete recruiter
Route::get('/DeleteRecruiter/{id}', [M_UsersController::class, 'destroyRL'])->name('deleteRecruiter');











Route::get('/nRecruiter', function () {
    return view('backPages.newRecruiter', [
        "title" => "nRecruiter"
    ]);
});
Route::get('/aList', function () {
    return view('backPages.applicantlist', [
        "title" => "aList"
    ]);
});
Route::get('/newest', function () {
    return view('backPages.newest', [
        "title" => "newest",
        "title1" => "dApplicant1"
    ]);
});
Route::get('/accepted', function () {
    return view('backPages.accepted', [
        "title" => "accepted"
    ]);
});
Route::get('/rejected', function () {
    return view('backPages.rejected', [
        "title" => "rejected"
    ]);
});
Route::get('/willing', function () {
    return view('backPages.willing', [
        "title" => "willing"
    ]);
});
Route::get('/waiting', function () {
    return view('backPages.waiting', [
        "title" => "waiting"
    ]);
});
Route::get('/refuse', function () {
    return view('backPages.refuse', [
        "title" => "refuse"
    ]);
});
Route::get('/Profile', [M_UsersController::class, 'indexProfile'])->name('profile');
