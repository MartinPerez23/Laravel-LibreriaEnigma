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

Route::get('/galeria',[
    "as" => "web.galeria",
    "uses" => "WebController@galeria"
]);


Route::group(["prefix" => "formulario"],function (){

        Route::get("/",[
            "as" => "web.formulario",
            "uses" => "WebController@formulario"
        ]);

        Route::post("/create",[
            "as" => "user.store",
            "uses" => "UsersController@store"
        ]);

});

Route::group(["prefix" => "panel"],function (){

    Route::get("/", [
        "as" => "panel.index",
        "uses" => "WebController@panel"
    ]);


    Route::group(["prefix" => "libros"],function (){

        Route::get("/",[
            "as" => "libros.index",
            "uses" => "LibrosController@index"
        ]);


        Route::get("/create",[
            "as" => "libros.create",
            "uses" => "LibrosController@create"
        ]);


        Route::post("/store",[
            "as" => "libros.store",
            "uses" => "LibrosController@store"
        ]);


        Route::get("/{id}/edit",[
            "as" => "libros.edit",
            "uses" => "LibrosController@edit"
        ]);


        Route::put("/{id}/update",[
            "as" => "libros.update",
            "uses" => "LibrosController@update"
        ]);

        Route::delete("/{id}/destroy",[
            "as" => "libros.destroy",
            "uses" => "LibrosController@destroy"
        ]);


    });

});