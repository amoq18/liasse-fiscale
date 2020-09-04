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
})->name('home');

// Routes sur Entreprise
Route::group(['prefix' => 'entreprise'], function () {
    // Creer et enregistrer une entreprise
    Route::get('entreprise/create', 'EntrepriseController@create')->name('entreprise.create');
    Route::post('entreprise/create', 'EntrepriseController@store')->name('entreprise.create');
    // liste de toutes les entreprises
    Route::get('entreprise/{idEntreprise}/edit', 'EntrepriseController@edit')->name('entreprise.edit');
    Route::post('entreprise/{idEntreprise}/edit', 'EntrepriseController@update')->name('entreprise.edit');
    // modifier une entreprise
    Route::get('entreprise/index', 'EntrepriseController@index')->name('entreprise.index');
    //information sur une entreprise
    Route::get('entreprise/{idEntreprise}/index', 'EntrepriseController@show')->name('entreprise.show');
    // supprimer une entreprise
    Route::get('entreprise/{idEntreprise}/delete', 'EntrepriseController@delete')->name('entreprise.delete');
});

    // Routes sur Staff Dirigeant
    Route::get('staff/dirigeant/create', 'StaffDirigeantController@create')->name('staff.dirigeant.create');
    Route::get('staff//dirigeant/index', 'StaffDirigeantController@index')->name('staff.dirigeant.index');

    // Routes sur Staff Conseil Administration
    Route::get('staff/conseil-administration/create', 'ConseilAdminController@create')->name('staff.ca.create');
    Route::get('staff/conseil-administration/index', 'ConseilAdminController@index')->name('staff.ca.index');


// Routes sur Banque
Route::group(['prefix' => 'banque'], function () {
    // Creer et enregistrer la banque
    Route::get('create', 'BanqueController@create')->name('banque.create');
    Route::post('create', 'BanqueController@store')->name('banque.create');
    // liste de toutes les banques
    Route::get('index', 'BanqueController@index')->name('banque.index');
    // modifier une banque
    Route::get('{idBanque}/edit', 'BanqueController@edit')->name('banque.edit');
    Route::post('{idBanque}/edit', 'BanqueController@update')->name('banque.edit');
    //information sur une banque
    Route::get('{idBanque}/index', 'BanqueController@show')->name('banque.show');
    // supprimer une banque
    Route::get('{idBanque}/delete', 'BanqueController@delete')->name('banque.delete');
});


// Routes sur Exercice
Route::get('exercice/create', 'ExerciceController@create')->name('exercice.create');
Route::post('exercice/create', 'ExerciceController@store')->name('exercice.create');
Route::get('exercice/index', 'ExerciceController@index')->name('exercice.index');
