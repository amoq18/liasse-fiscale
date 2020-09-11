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

Route::get('test', function () {
    return view('test');
});

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

// Routes sur Compte bancaire
// Route::group(['prefix' => 'banque'], function () {
// Creer et lier le compte à l'entreprise et la banque
Route::get('compte/banque/create', 'CompteBancaireController@create')->name('compte-bancaire.create');
Route::post('compte/banque/create', 'CompteBancaireController@store')->name('compte-bancaire.create');
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
    //information sur un exercice
    Route::get('{idExercice}/show', 'ExerciceController@show')->name('exercice.show');
    // supprimer un exercice
    Route::get('{idExercice}/delete', 'ExerciceController@delete')->name('exercice.delete');
});

// Routes sur Importation
Route::group(['prefix' => 'importation'], function () {
    Route::get('/', 'ImportationController@index')->name('importation.index');
    Route::post('excel', 'ImportationController@excel')->name('importation.excel');
});


// Routes sur Structure
Route::group(['prefix' => 'structure'], function () {
    // Route::get('pays', 'StructureController@index_pays')->name('structure.pays.index');

    // Routes sur Pays
    Route::group(['prefix' => 'pays'], function () {
        Route::get('', 'PaysController@index')->name('structure.pays.index');
        Route::get('create', 'PaysController@create')->name('pays.create');
        Route::post('create', 'PaysController@store')->name('pays.create');
    });

    // Routes sur banque
    Route::get('banques', 'BanqueController@index')->name('structure.banque.index');
    Route::get('banque/create', 'BanqueController@create')->name('structure.banque.create');
    Route::post('banque/create', 'BanqueController@store')->name('structure.banque.create');
    Route::get('banque/{idBanque}/edit', 'BanqueController@edit')->name('structure.banque.edit');
    Route::post('banque/{idBanque}/edit', 'BanqueController@update')->name('structure.banque.edit');
    //information sur une banque
    Route::get('banque/{idBanque}/show', 'BanqueController@show')->name('structure.banque.show');
    Route::get('banque/{idBanque}/delete', 'BanqueController@delete')->name('structure.banque.delete');

    Route::get('centre_impots', 'StructureController@index_centre_impots')->name('structure.centre_impots.index');
    Route::get('centre_impots/create', 'StructureController@create_centre_impots')->name('structure.centre_impots.create');
    Route::post('centre_impots/create', 'StructureController@create_centre_impots')->name('structure.centre_impots.create');

    Route::get('plans-comptables', 'PlanComptableController@index')->name('structure.plan-comptable.index');
    Route::post('plans-comptables/excel', 'PlanComptableController@excel')->name('structure.plan-comptable.excel');
    Route::get('impots', 'StructureController@index_impots')->name('structure.impots.index');
});

//Route sur Traitement
Route::group(['prefix' => 'traitement'], function () {
Route::get('controle-conformite', 'ControleConformiteController@index')->name('traitement.controle-conformite.index');
Route::get('controle-equilibre', 'ControleEquilibreController@index')->name('traitement.controle-equilibre.index');
Route::get('controle-coherence', 'ControleCoherenceController@index')->name('traitement.controle-coherence.index');
});

// Route sur Edition
Route::group(['prefix' => 'edition'], function () {
    Route::get('apercu-etat', 'EtatController@indexApercu')->name('edition.apercu-etat.index');
    Route::get('generation-etat', 'EtatController@indexGeneration')->name('edition.generation-etat.index');
});
