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

/*Route::get('/', function () {
    return view('welcome');
})->name('bienvenida');*/

Auth::routes();

Route::get('/Dashboard', 'HomeController@index')->name('home');


//RUTAS PARA LA GESTIÓN DE USUARIOS

Route::resources([

	'/Dashboard/GtnAdmin' => 'GtnAdms',

]);

Route::resource('/Dashboard/GtnMods', 'GtnModsCtrl')->except(['store', 'show', 'update', 'destroy']);

Route::resource('/Dashboard/GtnUsrs', 'GtnUsrCtrl')->except(['store', 'show', 'update', 'destroy']);

//ESPECIAL PARA EL DASHBOARD DEL BLOG

Route::resource('/Dashboard/blog', 'BlogCtrl')->except(['show']);

//GESTIONAR INFO DEL CORO

Route::resource('/Dashboard/infocoros', 'histCorosController')->except(['create', 'store', 'destroy', 'show']);

//Rutas para la página web

Route::get('/', 'PagesController@blogCoros')->name('ppal_Coros');

Route::get('/coros/{blog?}', 'BlogCtrl@show')->name('blog.show');

//RUTAS ITEMS SOBRE CORO

Route::get('sobreCoro/{links?}', 'PagesController@histCoros')->name('sobreCoro');

//DIRECTORIO DE RECURSOS: IMAGENES Y OTROS AÑADIDOS

Route::get('/res', 'PagesController@resDir')->name('resDir');

Route::resources([

	'/Dashboard/fotoMod' => 'fotoController'
	
]);

Route::get('/Dashboard/{docs?}', 'PagesController@docs');//->name('contab');