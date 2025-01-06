<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route pour le dash
Route::get('/dashboard', function () {

    return view('dashboard');

})->name('dashboard');

// Route pour les employes
Route::get('/employes', function () {

    return view('employes.listeEmployes');

})->name('employes');

//Route cotisation
Route::get('/cotisation', function () {

    return view('cotisation.tabledecotisation');

})->name('cotisation');


//Route pour les entreprises
Route::get('/entreprise', function () {

    return view('entreprise.listeEntreprise');

})->name('entreprise');

//Route pour les emplois&departement
Route::get('/emplois&departement', function () {

    return view('emploi_departe.listeEmploiDprt');

})->name('emplois&departement');

//Route pour les rapports d'emplois & département
Route::get('/Rapportemplois&departement', function () {

    return view('emploi_departe.rapportEmploiDprt');

})->name('Rapportemplois&departement');

//Route pour les localités
Route::get('/Localites', function () {

    return view('localites.localites');

})->name('Localites');


// Route rapport globale
Route::get('/Rapportglobale', function () {

    return view('rapportStat.rapportglobale');

})->name('rapportglobale');
