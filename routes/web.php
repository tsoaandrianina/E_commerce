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
Route::get('sauvercategorie','CategoryController@sauvercategorie');

//Produit
Route::get('/produits','ProductController@produits');
Route::get('/ajouterproduit','ProductController@ajouterproduit');
Route::get('/sauverproduit','ProductController@sauverproduit');

//Slider controlleur
Route::get('/ajouterslider','SliderController@ajouterslider');
Route::get('/sauverslider','SliderController@sauverslider');
Route::get('/sliders','SliderController@sliders');