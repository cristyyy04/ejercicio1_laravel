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

Route::get('/',['as' => 'home', function () {
    //return view('welcome');
    return view('home');
}]);
Route::get('contacto',['as' => 'contactos', function () {
    return view('contactos');
   // return "Hola desde la pag de contacto";
}]);
/*Route::get('saludos/{nombre?}', function ($nombre="Invitado") {
    //return view('welcome');
    return "Saludos $nombre";
});*/
Route::get('saludos/{nombre?}', function ($nombre = "Invitado") {
    return view('saludos', compact('nombre'));
})->where('nombre', "[A-Za-z]+")->name('saludos');


Route::get('contactame',['as'=>'contacto',function(){
    return 'seccion contactarr';
}]);
