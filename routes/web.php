<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


#################################### Partie utilisateur #################################################################

Route::get('/login','Utilisateur\AutentificationController@userLogin')->name('auth.login');
Route::get('/logout','Utilisateur\AutentificationController@userLogout')->name('auth.logout');
Route::get('/checklogin','Utilisateur\AutentificationController@checkLogin')->name('auth.check.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/', 'Utilisateur\AutentificationController@checkLogin' )->name('home');



#################################### End Partie utilisateur #################################################################


#################################### Partie achteur #################################################################

Route::group(['prefix'=>'acheteur'], function () {

    Route::get('/', 'Utilisateur\AcheteurController@index')->name('acheteur.index');

    Route::get('/reglement/{id?}', 'Utilisateur\AcheteurController@showDetails')->name('acheteur.details');

    Route::get('/offres/{id?}','Utilisateur\AcheteurController@VosOffres')->name('acheteur.offres');
    Route::get('/offres/note/{id}','Utilisateur\AcheteurController@showNote')->name('acheteur.note');
    Route::get('/offres/note','Utilisateur\AcheteurController@updateNote')->name('acheteur.store.note');

    Route::get('/offresclotures','Utilisateur\AcheteurController@OffresClotures')->name('acheteur.offre_cloture');

    Route::get('/appeloffres/new', function () {

        return view('acheteur.create');
    })->name('acheteur.create');
    Route::get('portfolio/{id}', 'Administrateur\AdminController@portfolio')->name('portfolio');

    Route::post('/appeloffres/new','Utilisateur\AcheteurController@create')->name('acheteur.store');
    Route::post('/appeloffres/delete/{id}','Utilisateur\AcheteurController@delete')->name('acheteur.offre.delete');

});
#################################### End Partie Acheteur #################################################################

#################################### Partie fournisseur #################################################################

Route::group(['prefix'=>'fournisseur'], function () {

    Route::get('/','Utilisateur\FounisseurController@index')->name('fournisseur.index');
    Route::get('/create/{id}','Utilisateur\FounisseurController@create')->name('fournisseur.create');
    Route::get('/abondonne','Utilisateur\FounisseurController@abondonne')->name('fournisseur.abondonne');
    Route::get('/marches','Utilisateur\FounisseurController@marche')->name('fournisseur.marche');

    Route::get('/store', 'Utilisateur\FounisseurController@store')->name('fournisseur.store');


});
#################################### End Partie fournisseur #################################################################

Route::get('portfolio/{id}', 'Administrateur\AdminController@portfolio')->name('portfolio');


#################################### Partie Admin #################################################################
Route::group(['prefix'=>'admin'], function () {

Route::get('/login','Administrateur\AuthController@adminLogin' )->name('adminLogin');

Route::post('/login','Administrateur\AuthController@checkAdmin' )->name('checkLogin');

Route::get('/logout','Administrateur\AuthController@logout' )->name('logout_admin');

Route::get('/profil','Administrateur\AuthController@changePass' )->name('admin_profil');

Route::get('/','Administrateur\AdminController@showStatistics')->name('adminHome');

Route::get('/users','Administrateur\AdminController@getUsers')->name('adminUsers');
Route::post('/users/delete/{id?}','Administrateur\AdminController@delete')->name('user_delete');
Route::get('search','Administrateur\AdminController@search')->name('user_find');

Route::get('/requests','Administrateur\AdminController@getRequest')->name('adminRequests');
Route::get('/requests/accept/{id?}','Administrateur\AdminController@acceptUser')->name('user_accept');
});

#################################### End Partie Admin #################################################################
