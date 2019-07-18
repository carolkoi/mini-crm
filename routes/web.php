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
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/company', 'CompanyController@showCompanyMenu');

Route::get('/add/company', 'CompanyController@getCompanyForm');

Route::post('/add/company', 'CompanyController@store');

Route::get('/company', 'CompanyController@index');
         
Route::get('edit/company/{id}', 'CompanyController@edit');

Route::patch('edit/company/{id}', 'CompanyController@update');

Route::delete('delete/company/{id}', 'CompanyController@destroy');

Route::get('/add/employee', 'EmployeeController@getEmployeeForm');

Route::post('/add/employee', 'EmployeeController@store');

Route::get('/employee', 'EmployeeController@index');

Route::get('/edit/employee/{id}', 'EmployeeController@edit');

Route::patch('/edit/employee/{id}', 'EmployeeController@update');

Route::delete('/delete/employee/{id}', 'EmployeeController@destroy');

Route::get('send/company/mail/{id}', 'CompanyController@sendCompanyMail');


Route::get('send/mail', 'Homecontroller@mail');

Route::get('lang{locale}', 'Homecontroller@lang');

Route::get('send/email', 'CompanyController@sendEmail');







