<?php

use Illuminate\Support\Facades\Route;

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
