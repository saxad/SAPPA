<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
     
    return view('home');
})->name('home')->middleware('auth');

/**
 *  routes schemas
 */
Route::get('/schemas/{id}', 'SchemaController@index')->name('schemas');
Route::get('/schemas/poste/{id}', 'SchemaController@getschema')->name('posteSchemas');


/**
 *  routes profile
 */
Route::get('/profile', function () {
      
    return view('profile');
})->middleware('auth')->name('profile');


/**
 * outils & lien
 */

Route::get('/outils','ToolsController@index')->name('tools');

/**
 * routes administration
 */
Route::get('/administration','AdminController@index')->name('admin');
Route::delete('/administration/deleteUser/{id}','AdminController@destroyUser')->name('deleteUser');
Route::get('/administration/deleteUser/{id}','AdminController@destroyUser')->name('deleteUser');

Route::delete('/administration/deleteTool/{id}','AdminController@destroyTool')->name('deleteTool');
Route::get('/administration/deleteTool/{id}','AdminController@destroyTool')->name('deleteTool');
Route::get('/administration/deleteCategory/{id}','AdminController@destroyCategory')->name('deleteCategory');
Route::post('/administration/storeTool','AdminController@storeTool')->name('storeTool');
Route::patch('/administration/editTool','AdminController@editTool')->name('editTool');

Route::post('/administration/storeBo','AdminController@storeBo')->name('storeBo');
Route::post('/administration/storeCategory','AdminController@storeCategory')->name('storeCategory');

/**
 * routes event
 */
Route::get('/evenements_remarquables','EventController@index')->name('event');
Route::post('/evenements_remarquables/storeEvent','EventController@storeEvent')->name('storeEvent');
Route::delete('/evenements_remarquables/deleteEvent/{id}','EventController@deleteEvent')->name('deleteEvent');

/**
 * Route dictionnaire
 */
Route::get('/dictionnaire', function () {
    return view('dictionnaire');
})->name('dictionnaire');


/**
 * routes pour  trombinoscope
 */

Route::get('/trombinoscope', 'TrombinoscopeController@index' )->name('trombinoscope');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
