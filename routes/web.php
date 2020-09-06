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

    // Routes sur Staff Dirigeant
    Route::group(['prefix' => 'dirigeant'], function () {
        // Creer et enregistrer un Staff Dirigeant
        Route::get('create', 'StaffDirigeantController@create')->name('staff.dirigeant.create');
        Route::post('create', 'StaffDirigeantController@store')->name('staff.dirigeant.create');
        // liste de toutes les Staffs Dirigeants
        Route::get('index', 'StaffDirigeantController@index')->name('staff.dirigeant.index');
        // modifier un Staff Dirigeant
        Route::get('{idDirigeant}/edit', 'StaffDirigeantController@edit')->name('staff.dirigeant.edit');
        Route::post('{idDirigeant}/edit', 'StaffDirigeantController@update')->name('staff.dirigeant.edit');
        //information sur un Staff Dirigeant
        Route::get('{idDirigeant}/show', 'StaffDirigeantController@show')->name('staff.dirigeant.show');
        // supprimer un Staff Dirigeant
        Route::get('{idDirigeant}/delete', 'StaffDirigeantController@delete')->name('staff.dirigeant.delete');
    });

    // Routes sur Staff Conseil Administration
    Route::group(['prefix' => 'conseil-administration'], function () {
        // Creer et enregistrer un Conseil Administration
        Route::get('create', 'ConseilAdminController@create')->name('staff.ca.create');
        Route::post('create', 'ConseilAdminController@store')->name('staff.ca.create');
        // modifier un Conseil Administration
        Route::get('{idConseil}/edit', 'ConseilAdminController@edit')->name('staff.ca.edit');
        Route::post('{idConseil}/edit', 'ConseilAdminController@update')->name('staff.ca.edit');
        // liste de toutes les Conseils Administrations
        Route::get('index', 'ConseilAdminController@index')->name('staff.ca.index');
        //information sur un Staff Dirigeant
        Route::get('{idConseil}/show', 'ConseilAdminController@show')->name('staff.ca.show');
        // supprimer un Conseil Administration
        Route::get('{idConseil}/delete', 'ConseilAdminController@delete')->name('staff.ca.delete');
    });
});

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
    Route::get('{idBanque}/show', 'BanqueController@show')->name('banque.show');
    // supprimer une banque
    Route::get('{idBanque}/delete', 'BanqueController@delete')->name('banque.delete');
});


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
});

// Routes sur Structure
Route::group(['prefix' => 'structure'], function () {
    Route::get('pays', 'StructureController@index_pays')->name('structure.pays.index');
    Route::get('banques', 'StructureController@index_banques')->name('structure.banques.index');
    Route::get('plans-comptables', 'StructureController@index_comptables')->name('structure.comptables.index');
    Route::get('impots', 'StructureController@index_impots')->name('structure.impots.index');
});
