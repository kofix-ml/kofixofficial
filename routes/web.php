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
Route::prefix('/courses')->group(function () {
    Route::prefix('/teensandkids')->group(function () {
        Route::get('/', function () {
		    return view('pages.teensandkids');
		});
		Route::get('/read', function () {
			
		});
		Route::get('/register', function () {
			
		});
    });
    Route::prefix('/collegeanduniversities')->group(function () {
		Route::get('/', 'ModuleController@index');	
		Route::prefix('/{module}')->group(function () {
			Route::get('/read', 'ModuleController@show');	
			Route::get('/register', function () {
				
			});
		});
    });
    Route::prefix('/corporateandprivate')->group(function () {
        Route::get('/', function () {
		    return view('pages.corporateandprivate');
		});
    });
});

Route::get('/schedule', function () {
	return view('pages.schedule');
});

Route::get('/about_us','SimpleController@aboutus');

Route::get('/contact_us', function () {
	return view('pages.contactus');
});