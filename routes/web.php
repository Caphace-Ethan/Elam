<?php

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

//English 


Route::get('/en', function () {
    return view('en/welcome');
});

Auth::routes();

Route::get('/en/home', 'HomeController@index')->name('home');
Route::get('/en/infonews', function () {
    return view('en/infoNews');
});
Route::get('/en/financial', function () {
    return view('en/financial');
});
Route::get('/en/about', function () {
    return view('en/about');
});
Route::get('/en/regulations', function () {
    return view('en/regulations');
});
Route::get('/en/requirements', function () {
    return view('en/requirements');
});
Route::get('/en/procedures', function () {
    return view('en/procedures');
});
Route::get('/en/prospectus', function () {
    return view('en/prospectus');
});
Route::get('/en/contact', function () {
    return view('en/contact');
});
Route::get('/en/theology', function () {
    return view('en/theologydept');
});
Route::get('/en/philosophy', function () {
    return view('en/philosophydept');
});
Route::get('/en/generalstudies', function () {
    return view('en/generalstudydept');
});
Route::get('/en/psychology', function () {
    return view('en/psychologydept');
});

Route::get('/en/certificate', function () {
    return view('en/certificatecourses');
});
Route::get('/en/diploma', function () {
    return view('en/diplomacourses');
});
Route::get('/en/bachelor', function () {
    return view('en/bachelorcourses');
});

// Swahili
Route::get('/',function(){
return view('sw/welcome');
});
Route::get('/sw/home', 'HomeController@index')->name('home');
Route::get('/sw/infonews', function () {
    return view('sw/infoNews');
});
Route::get('/sw/financial', function () {
    return view('sw/financial');
});
Route::get('/sw/about', function () {
    return view('sw/about');
});
Route::get('/sw/regulations', function () {
    return view('sw/regulations');
});
Route::get('/sw/requirements', function () {
    return view('sw/requirements');
});
Route::get('/sw/procedures', function () {
    return view('sw/procedures');
});
Route::get('/sw/prospectus', function () {
    return view('sw/prospectus');
});
Route::get('/sw/contact', function () {
    return view('sw/contact');
});
Route::get('/sw/theology', function () {
    return view('sw/theologydept');
});
Route::get('/sw/philosophy', function () {
    return view('sw/philosophydept');
});
Route::get('/sw/generalstudies', function () {
    return view('sw/generalstudydept');
});
Route::get('/sw/psychology', function () {
    return view('sw/psychologydept');
});

Route::get('/sw/certificate', function () {
    return view('sw/certificatecourses');
});
Route::get('/sw/diploma', function () {
    return view('sw/diplomacourses');
});
Route::get('/sw/bachelor', function () {
    return view('sw/bachelorcourses');
});