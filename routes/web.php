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

Route::get('/', function () {
    return view('babysitting.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout',[
          'as'=>'logout',
          'uses'=>'Auth\LoginController@logout']);

Route::get('/parecangur',[
    'as'=>'parecangur',
    'uses'=>'WebController@parecangur']);

Route::get('/footernannys/',[
    'as'=>'footernannys',
    'uses'=>'WebController@footernannys'
]);

Route::get('/footercangurs/',[
    'as'=>'footercangurs',
    'uses'=>'WebController@footercangurs'
]);

Route::get('/pares/frontendpares',[   
    'as'=>'frontendpares',      
    'uses'=>'PareController@frontendpares']); 

Route::get('/pares/frontendpares/anuncis-cangurs',[   
    'as'=>'frontendpares',      
    'uses'=>'PareController@frontendpares']); 

Route::get('/cangurs/anunciscangurs',[   
    'as'=>'anuncis-cangurs',      
    'uses'=>'CangurController@index']); 

Route::get('/cangurs/frontendcangur',[   
    'as'=>'frontendcangur',      
    'uses'=>'CangurController@frontendcangur']); 

Route::get('/cangurs/backend/backendcangur',[   
    'as'=>'backendcangur',      
    'uses'=>'CangurController@backendcangur']);


Route::get('/pares/backed/backendpare',[
        'as'=>'backendpare',
        'uses'=>'PareController@backendpare']);

Route::resource('/cangurs/backend/backendcangur', 'AnuncisCrudController');

Route::bind('anunciscangurs',function($AnuncisCangurs){
        return App\AnuncisCangurs::find($AnuncisCangurs);
});

Route::post('/update-anunci/{id}', [
    'as' => 'update-anunci',
    'uses' => 'AnuncisCrudController@update']);

Route::get('/edit-anunci/{id}', [
    'as' => 'edit-anunci',
    'uses' => 'AnuncisCrudController@edit']);

Route::post('/backendcangur/crear-anunci', [
    'as' => 'crear-anunci',
    'uses' => 'AnuncisCrudController@store']);