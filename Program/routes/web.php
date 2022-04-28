<?php

use App\Http\Controllers\M_JobsController;
use App\Http\Controllers\M_UsersController;
use Illuminate\Support\Facades\Route;

// FRONT
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

// BACK
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

// <== JOB VACANCIES ==>
// {Opened}
// (CREATE)
Route::get('/AddNewJobVacancies', [M_JobsController::class, 'createJV'])->name('FormCreate_JobVacancies');
Route::post('/AddJobVacancies', [M_JobsController::class, 'storeJV'])->name('Create_JobVacancies');
// (READ)
Route::get('/JobVacancies', [M_JobsController::class, 'indexJV'])->name('Read_JobVacancies');
// (UPDATE)
Route::get('/EditJobVacancies/{id}', [M_JobsController::class, 'editJV'])->name('FormUpdate_JobVacancies');
// (DELETE)

// ----------------------------------
// {Closed}
// (CREATE)
// none
// (READ)

// (UPDATE)
// none
// (DELETE)

// {/Closed\}
// <== //JOB VACANCIES\\ ==>


// <== USERS ==>
// {Recruiter}
// (CREATE)
Route::get('/AddNewRecruiter', [M_UsersController::class, 'createUR'])->name('FormCreate_Recruiter');
Route::post('/AddRecruiter', [M_UsersController::class, 'storeUR'])->name('Create_Recruiter');
// (READ)
Route::get('/RecruiterList', [M_UsersController::class, 'indexUR'])->name('Read_RecruiterList');
// (UPDATE)

// (DELETE)
Route::get('/DeleteRecruiter/{id}', [M_UsersController::class, 'destroyUR'])->name('Delete_Recruiter');
// ----------------------------------
// {Applicant}
// (CREATE)

// (READ)
Route::get('/ApplicantList', [M_UsersController::class, 'indexUA'])->name('Read_ApplicantList');
// (UPDATE)

// (DELETE)
Route::get('/DeleteApplicant/{id}', [M_UsersController::class, 'destroyUA'])->name('Delete_Applicant');
// <== //USERS\\ ==>

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

Route::get('/profile', function () {
    return view('backPages.profile', [
        "title" => "profile"
    ]);
});
