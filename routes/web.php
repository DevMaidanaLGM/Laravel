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



Route::view('/', 'home')->name('home'); //Ruta principal
Route::view('/about', 'about') ->name ('about'); //Muestra info de mi


Route::resource('projects', 'Projectcontroller'); //Ruta de los proyectos

Route::view ('/contact', 'contact')->name('contact');
//Ruta para el form de contacto
Route::post('contact', 'MessageController@store') -> name ('messages.store');
//Método para enviar el mensaje
Auth::routes(['register' => false]); //Deshabilita la ruta de registro
/*
En la ruta projects, se utiliza el método resource para reducir la cantidad
de código y hacerlo más entendible.

Lo que hace es buscar usar projects como subfijo de la uri, y como previamente
los métodos de la ruta tenían el mismo nombre que los de los controladores
ahora busca directamente el método dentro del controlador
Abajo dejo el código viejo abajo para que se entienda mejor.
*/
// Route::get('/project', 'ProjectController@index') ->name('projects.index');
// Route::get('/project/create', 'ProjectController@create') ->name('projects.create');
// Route::get('/project/{project}/editar', 'ProjectController@edit') ->name('projects.edit');
// Route::patch('/project/{project}/', 'ProjectController@update') ->name('projects.update');
// Route::get('/project/{project}', 'ProjectController@show') ->name('projects.show');
// Route::post('/project', 'ProjectController@store') ->name('projects.store');
// Route::delete('/projects/{project}', 'ProjectController@destroy')->name('projects.destroy');
//
