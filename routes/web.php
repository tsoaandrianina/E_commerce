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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Client controlleur
Route::get('/','ClientController@home');
Route::get('/shop','ClientController@shop');
Route::get('/panier','ClientController@panier');
Route::get('/client_login','ClientController@client_login');
Route::get('/signup','ClientController@signup');
Route::get('/paiement','ClientController@paiement');

//Admin controlleur
Route::get('/admin','AdminController@dashbord');
Route::get('/commandes','AdminController@commandes');

//Categorie controlleur
Route::get('/categories','CategoryController@categories');
Route::get('/ajoutercategorie','CategoryController@ajoutercategorie');
Route::post('/sauvercategorie','CategoryController@sauvercategorie');
Route::get('/edit_categorie/{id}','CategoryController@edit_categorie');
Route::post('/modifiecategorie','CategoryController@modifiecategorie');
Route::get('/supprimercategorie/{id}','CategoryController@supprimercategorie');

//Produit
Route::get('/produits','ProductController@produits');
Route::get('/ajouterproduit','ProductController@ajouterproduit');
Route::post('/sauverproduit','ProductController@sauverproduit');

//Slider controlleur
Route::get('/ajouterslider','SliderController@ajouterslider');
Route::get('/sauverslider','SliderController@sauverslider');
Route::get('/sliders','SliderController@sliders');
