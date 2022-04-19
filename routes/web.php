<?php

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
Route::get('/aProfile', function () {
    return view('backPages.aProfile', [
        "title" => "aProfile"
    ]);
});
