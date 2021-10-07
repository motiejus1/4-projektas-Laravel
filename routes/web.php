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
    return view('welcome');
});

//clients, companies

Route::prefix('clients')->group(function () {

    Route::get('','ClientController@index')->name('client.index')->middleware("auth");
    Route::get('create', 'ClientController@create')->name('client.create')->middleware("auth");
    Route::post('store', 'ClientController@store')->name('client.store')->middleware("auth");
    Route::get('edit/{client}', 'ClientController@edit')->name('client.edit')->middleware("auth");
    Route::post('update/{client}', 'ClientController@update')->name('client.update')->middleware("auth");
    Route::post('delete/{client}', 'ClientController@destroy' )->name('client.destroy')->middleware("auth");
    Route::get('show/{client}', 'ClientController@show')->name('client.show')->middleware("auth");

});

Route::prefix('companies')->group(function () {

    Route::get('','CompanyController@index')->name('company.index');
    Route::get('create', 'CompanyController@create')->name('company.create');
    Route::post('store', 'CompanyController@store')->name('company.store');
    Route::get('edit/{company}', 'CompanyController@edit')->name('company.edit');
    Route::post('update/{company}', 'CompanyController@update')->name('company.update');
    Route::post('delete/{company}', 'CompanyController@destroy' )->name('company.destroy');
    Route::get('show/{company}', 'CompanyController@show')->name('company.show');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
