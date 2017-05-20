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

Route::get('/', function () {
    return view('pages.home');
});

# Train & Courses
Route::get('/courses/teensandkids', function () {
	return view('pages.teensandkids');
});
Route::get('/courses/collegeanduniversities', function () {
	return view('pages.collegeanduniversities');
});
Route::get('/courses/corporateandprivate', function () {
	return view('pages.corporateandprivate');
});

Route::get('/schedule', function () {
	return view('pages.schedule');
});

Route::get('/about_us','SimpleController@aboutus');

Route::get('/contact_us', function () {
	return view('pages.contactus');
});