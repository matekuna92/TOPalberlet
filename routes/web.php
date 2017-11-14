<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Auth::routes();

/*Route::group(['middleware' => 'web'], function()
{*/
    Route::auth();

    // all routes.
    Route::get('/', 'HomeController@index');
    /*Route::get('/', function ()
    {
        return view('welcome');
    }); /*ITT IS MEG VOLT ADVA RETURN VIEW, MEG A KONTROLLERBEN IS, EZÉRT NEM ISMERTE A HOUSES VÁLTOZÓT !!!!!!
    Mivel az itt levő futott le alapértelmezettként.... A view-t a controllerben return-öljük !!!! */

// Route::get('/home', 'HomeController@index');
    Route::get('/bejelentkezes',function()
    {
        return view('auth/login');
    });

    Route::get('/regisztracio',function()
    {
        return view('auth/register');
    });

    Route::get('/kereses',function()
    {
        return view('search');
    });

    Route::get('/feltoltes',function()
    {
        return view('upload');
    });

    Route::get('/kedvencek',function()
    {
        return view('favourites');
    });

    Route::resource('/feltoltes','UsersUploadController');





