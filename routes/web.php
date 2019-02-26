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

Route::resource('/produits','ProduitsController' );
//Route::GET('/produits/{produit}','ProduitsController@show')->middleware('auth');
Route::resource('/commandes','commandesController' );
Route::GET('/commandes/save/commande','commandesController@Save_cmd__page_show')->middleware('auth');
Route::GET('/commandes/save/commande2','commandesController@Save_cmd__page_accauille')->middleware('auth');
Route::GET('/commandes/save/commande3','commandesController@Save_cmd__page_search')->middleware('auth');
Route::GET('/commandes/save/commande4','commandesController@Save_cmd__page_categorie')->middleware('auth');
Route::GET('/commandes/checkout/confirm','commandesController@checkout')->middleware('auth');
Route::GET('/commandes/checkout/invoice','CommandesController@invoice')->middleware('auth');
Route::GET('/commandes/checkout/invoice_pdf','CommandesController@downloadPDF')->
middleware('auth');
Route::GET('/commandes/checkout/boot','CommandesController@boot');



Route::PUT('/commandes/checkout/update/{id}','commandesController@change_info')->middleware('auth');
Route::PUT('/commandes/checkout/confirmation/{id}','commandesController@confirmation')->middleware('auth');
Route::GET('/produits/rech/{req}','ProduitsController@rech');
Route::GET('/produits/search/result','ProduitsController@search');
Route::GET('/produits/categorie/store','ProduitsController@categorie');


Auth::routes();


