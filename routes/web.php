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
    Route::post('/','HomeController@search');
    Route::get('/hirdeteseim', 'MyPostsController@index');
   // Route::get('/kereses','SearchController@search');


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

    /* Route::get('/kereses',function()
    {
        return view('search');
    }); */

    Route::get('/feltoltes',function()
    {
        return view('upload');
    });

//Route::resource('/hirdetesem', 'MyPostsController@index');i

   /*Route::get('/hirdeteseim',function()
    {
        return view('myposts');
    });     A fenti megvalósítás a helyes ! Controllerben térünk vissza view-val, nem itt ! */
;
    Route::resource('/feltoltes','UsersUploadController');

Route::get('/post/{id}',['as'=>'post','uses'=>'UsersUploadController@showPost']);

Route::get('/post/{id}/edit',['as'=>'edit','uses'=>'MyPostsController@edit']);

Route::resource('/posts', 'MyPostsController');


/* Route::get('/post/{id}/edit',['as'=>'edit','uses'=>'MyPostsController@edit']);

Route::resource('/posts', 'MyPostsController');

Meg kellett adni, hogy az adott resource-on a myposts kontrollert fogjuk használni, különben nem ismerte az update metódust !!!
 Egyszerűbb ha egy resource ban megadjuk a kontrollert, és így használjuk a különböző metódusokat
*/







