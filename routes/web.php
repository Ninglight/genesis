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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index', ['title' => 'Samantha']);
});

Route::get('/psychologie-clinique', function () {
    return view('psychologie-clinique');
});

Route::get('/neuropsychologie', function () {
    return view('neuropsychologie');
});

Route::get('/ariasy-m-changama', function () {
    return view('ariasy-m-changama');
});

Route::get('/catherine-hoareau', function () {
    return view('catherine-hoareau');
});

Route::get('/soins', function () {
    return view('soins');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'/*, 'middleware' => 'auth'*/], function () {

    Route::get('/', function () {
        return view('admin');
    });

});


