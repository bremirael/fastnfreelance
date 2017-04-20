<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('cataloguefreelancer', 'HomeController@catalogueFreelancer');
Route::get('cataloguesociete', 'HomeController@catalogueSociete');


Route::group(['middleware' => 'guest'], function() {
  Route::get('inscription', 'AuthController@getRegister');
  Route::post('inscription', 'AuthController@postRegister');
  Route::get('offre/{id}', 'PageController@showProjet');

  //Inscription Freelancer
  Route::get('inscriptionfr', 'AuthfrController@getRegister');
  Route::post('inscriptionfr', 'AuthfrController@postRegister');

   //Inscription Societe
  Route::get('inscriptionso', 'AuthsoController@getRegister');
  Route::post('inscriptionso', 'AuthsoController@postRegister');

  Route::get('connexion', 'AuthController@getLogin');
  Route::post('connexion', 'AuthController@postLogin');
});

Route::group(['middleware' => 'auth'], function() {
  Route::get('compte', 'AuthController@account');
  Route::put('compte', 'AuthController@postPassword');

  Route::get('deconnexion', 'AuthController@logout');
});



Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function() {
  Route::get('/', 'AdminController@getProjets');
  Route::post('/', 'AdminController@postProjet');

  Route::get('supprimer/{id}', 'AdminController@removeProjet');

  Route::get('editer/{id}', 'AdminController@getEditProjet');
  Route::put('editer/{id}', 'AdminController@postEditProjet');



  Route::get('gestion', 'AdminController@getUsers');

  Route::get('gestion/editer/{id}', 'AdminController@getEditUser');
  Route::put('gestion/editer/{id}', 'AdminController@postEditUser');

  Route::get('gestion/supprimer/{id}', 'AdminController@removeUser');

});


Route::group(['middleware' => ['auth', 'societe'], 'prefix' => 'societe'], function() {
  Route::get('/', 'SocieteController@getProjets');
  Route::post('/', 'SocieteController@postProjet');

  Route::get('supprimer/{id}', 'SocieteController@removeProjet');

  Route::get('editer/{id}', 'SocieteController@getEditProjet');
  Route::put('editer/{id}', 'SocieteController@postEditProjet');

});

Route::group(['middleware' => ['auth', 'freelancer'], 'prefix' => 'freelancer'], function() {
 
  //Route::get('editprofil', 'FreelancerController@getFreelancer');
  Route::get('monprofil/{id}', 'FreelancerController@getEditFreelancer');
  Route::put('monprofil/{id}', 'FreelancerController@postEditFreelancer');

});

