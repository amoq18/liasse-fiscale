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

// Route sur staff
Route::group(['prefix' => 'staff'], function () {
    // Creer et enregistrer un Staff
    Route::get('create', 'StaffController@create')->name('staff.create');
    Route::post('create', 'StaffController@store')->name('staff.create');
    // liste de tout les Staffs
    Route::get('index', 'StaffController@index')->name('staff.index');
    //information sur un staff
    Route::get('{idStaff}/show', 'StaffController@show')->name('staff.show');
    // supprimer un staff
    Route::get('{idStaff}/delete', 'StaffController@delete')->name('staff.delete');
});

// Routes sur Banque
// Route::group(['prefix' => 'banque'], function () {
// Creer et enregistrer la banque
Route::get('banque/create', 'BanqueController@createCompte')->name('banque.create');
Route::post('banque/create', 'BanqueController@storeCompte')->name('banque.create');
// liste de toutes les banques
Route::get('banque/index', 'BanqueController@index')->name('banque.index');
// modifier une banque
Route::get('entreprise/{idEntreprise}/banque/{idCompte}/banque/edit', 'BanqueController@edit')->name('banque.edit');
Route::post('entreprise/{idEntreprise}/banque/{idCompte}/banque/edit', 'BanqueController@update')->name('banque.edit');
//information sur une banque
Route::get('entreprise/{idEntreprise}/compte/{idCompte}/banque/show', 'BanqueController@show')->name('banque.show');
// supprimer une banque
Route::get('entreprise/{idEntreprise}/banque/{idCompte}/banque/delete', 'BanqueController@delete')->name('banque.delete');
// });


// Routes sur Exercice
Route::group(['prefix' => 'exercice'], function () {
    // Creer et enregistrer un exercice
    Route::get('create', 'ExerciceController@create')->name('exercice.create');
    Route::post('create', 'ExerciceController@store')->name('exercice.create');
    // liste de toutes les exercices
    Route::get('index', 'ExerciceController@index')->name('exercice.index');
    // modifier un exercice
    Route::get('{idExercice}/edit', 'ExerciceController@edit')->name('exercice.edit');
    Route::post('{idExercice}/edit', 'ExerciceController@update')->name('exercice.edit');
    //information sur un eercice
    Route::get('{idExercice}/show', 'ExerciceController@show')->name('exercice.show');
    // supprimer un exercice
    Route::get('{idExercice}/delete', 'ExerciceController@delete')->name('exercice.delete');
});

// Routes sur Importation
Route::group(['prefix' => 'importation'], function () {
    Route::get('/', 'ImportationController@index')->name('importation.index');
    Route::post('excel', 'ImportationController@excel')->name('importation.excel');
});

// Routes sur Pays
Route::group(['prefix' => 'pays'], function () {
    Route::get('index', 'PaysController@index')->name('pays.index');
    Route::get('create', 'PaysController@create')->name('pays.create');
    Route::post('create', 'PaysController@store')->name('pays.create');
});

// Routes sur Structure
Route::group(['prefix' => 'structure'], function () {
    Route::get('pays', 'StructureController@index_pays')->name('structure.pays.index');

    // Routes sur banque
    Route::get('banques', 'BanqueController@index')->name('structure.banque.index');
    Route::get('banque/create', 'BanqueController@create')->name('structure.banque.create');
    Route::post('banque/create', 'BanqueController@store')->name('structure.banque.create');
    //information sur une banque
    Route::get('banque/{idBanque}/show', 'BanqueController@show')->name('structure.banque.show');

    Route::get('centre_impots', 'StructureController@index_centre_impots')->name('structure.centre_impots.index');
    Route::get('centre_impots/create', 'StructureController@create_centre_impots')->name('structure.centre_impots.create');
    Route::post('centre_impots/create', 'StructureController@create_centre_impots')->name('structure.centre_impots.create');

    Route::get('plans-comptables', 'StructureController@index_plans_comptables')->name('structure.plans_comptables.index');
    Route::get('impots', 'StructureController@index_impots')->name('structure.impots.index');
});
