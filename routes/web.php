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


/**
 *  routes home
 */
Route::get('/', function () {
     
    return view('home');
})->name('home')->middleware('auth');

/**
 * routes des dossiers sappa
 */
 Route::get('/sappa',function(){
     return view('sappa-folder.sappa');
 })->name('sappa')->middleware('auth');

 

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
Route::patch('/administration/editCategory','AdminController@editCategory')->name('editCategory');

Route::post('/administration/storeTool','AdminController@storeTool')->name('storeTool');
Route::patch('/administration/editTool','AdminController@editTool')->name('editTool');


Route::post('/administration/storeBo','AdminController@storeBo')->name('storeBo');
Route::get('/administration/deleteBo/{id}','AdminController@destroyBo')->name('deleteBo');
Route::patch('/administration/editBo','AdminController@editBo')->name('editBo');


Route::post('/administration/storeCategory','AdminController@storeCategory')->name('storeCategory');


Route::post('/administration/storeDepartment','AdminController@storeDepartment')->name('storeDepartment');
Route::get('/administration/deleteDepartment/{id}','AdminController@destroyDepartment')->name('deleteDepartment');
Route::patch('/administration/editDepartment','AdminController@editDepartment')->name('editDepartment');



Route::post('/administration/storePoste','AdminController@storePoste')->name('storePoste');
Route::get('/administration/deletePoste/{id}','AdminController@destroyPoste')->name('deletePoste');
Route::patch('/administration/editPoste','AdminController@editPoste')->name('editPoste');

//editDoste
Route::post('/administration/storeDepart','AdminController@storeDepart')->name('storeDepart');
Route::patch('/administration/editDepart','AdminController@editDepart')->name('editDepart');
Route::get('/administration/deleteDepart/{id}','AdminController@destroyDepart')->name('deleteDepart');

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
