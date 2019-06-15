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

Route::get("/",[
    "as" => "web.index",
    "uses" => "WebController@index"
]);

Route::get("/formulario",[
    "as" => "web.formulario",
    "uses" => "WebController@formulario"
]);

Route::get("/galeria",[
    "as" => "web.galeria",
    "uses" => "WebController@galeria"
]);
