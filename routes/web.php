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


Route::get('/staff_login', 'Staff\LoginController@showLoginForm')->name('staff.login');
Route::get('/staff_register', 'Staff\RegisterController@showRegisterForm')->name('staff.register');

Route::post('/staff_login', 'Staff\LoginController@login')->name('staff.login.submit');
Route::post('/staff_register', 'Staff\RegisterController@create')->name('staff.register.submit');

Route::get('/student-home', 'UserController@index')->name('student-home');
Route::get('/staff-home', 'StaffController@index')->name('staff-home');

Route::get('/books', 'UploadController@index')->name('books');

Route::get('/student-certificate', 'UserController@showcertificatebooks')->name('student-certificate');
Route::get('/student-diploma', 'UserController@showdiplomabooks')->name('student-diploma');
Route::get('/student-bachelor', 'UserController@showbachelorbooks')->name('student-bachelor');

Route::get('/student-books', 'UserController@showbooks')->name('student-books');

Route::get('/modules', 'ModuleController@index')->name('modules');
Route::get('/education-levels', 'EducationLevelController@index')->name('education-levels');
Route::get('/semesters', 'SemesterController@index')->name('semesters');
Route::get('/classes', 'ClassController@index')->name('classes');
Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/students', 'StaffController@showstudents')->name('students');

Route::get('/certificate-courses', 'CourseController@certificatecourses')->name('certificate-courses');
Route::get('/diploma-courses', 'CourseController@diplomacourses')->name('diploma-courses');
Route::get('/bachelor-courses', 'CourseController@bachelorcourses')->name('bachelor-courses');
Route::get('/postgraduate-courses', 'CourseController@postgraduatecourses')->name('postgraduate-courses');

Route::get('/student-certificate-courses', 'UserController@certificatecourses')->name('student-certificate-courses');
Route::get('/student-diploma-courses', 'UserController@diplomacourses')->name('student-diploma-courses');
Route::get('/student-bachelor-courses', 'UserController@bachelorcourses')->name('student-bachelor-courses');
Route::get('/student-postgraduate-courses', 'UserController@postgraduatecourses')->name('student-postgraduate-courses');


Route::post('/upload-file','UploadController@store')->name('upload-file.submit');


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


// CRUD

Route::resource('semesters', 'SemesterController');
Route::resource('courses', 'CourseController');
Route::resource('classes', 'ClassController');



// Swahili
Route::get('/',function(){
return view('sw/welcome');
});
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

// CRUD

Route::resource('semester', 'SemesterController');