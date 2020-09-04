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

// Routes sur Entreprise
Route::get('entreprise/create', 'EntrepriseController@create')->name('entreprise.create');
Route::post('entreprise/create', 'EntrepriseController@store')->name('entreprise.create');
Route::get('entreprise/index', 'EntrepriseController@index')->name('entreprise.index');
Route::get('entreprise/{idEntreprise}/index', 'EntrepriseController@show')->name('entreprise.show');

// Routes sur Staff Dirigeant
Route::get('staff/dirigeant/create', 'StaffDirigeantController@create')->name('staff.dirigeant.create');
Route::get('staff//dirigeant/index', 'StaffDirigeantController@index')->name('staff.dirigeant.index');

// Routes sur Staff Conseil Administration
Route::get('staff/conseil-administration/create', 'ConseilAdminController@create')->name('staff.ca.create');
Route::get('staff/conseil-administration/index', 'ConseilAdminController@index')->name('staff.ca.index');

// Routes sur Banque
Route::get('banque/create', 'BanqueController@create')->name('banque.create');
Route::get('banque/index', 'BanqueController@index')->name('banque.index');

// Routes sur Banque
Route::get('exercice/create', 'ExerciceController@create')->name('exercice.create');
Route::get('exercice/index', 'ExerciceController@index')->name('exercice.index');
