<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app');
});

Route::controllers(
	[
    	'auth' => 'Auth\AuthController',
    	'password' => 'Auth\PasswordController',
	]);

Route::pattern('id', '[0-9+]');

Route::get('/materials/', ['as' => 'materials', 'uses' => 'MaterialsController@index']);
Route::get('/materials/create', ['as' => 'materials.create', 'uses' => 'MaterialsController@create']);
Route::get('/materials/{id}/edit', ['as' => 'materials.edit', 'uses' => 'MaterialsController@edit']);
Route::get('/materials/{id}/destroy', ['as' => 'materials.destroy', 'uses' => 'MaterialsController@destroy']);
Route::put('/materials/{id}/update', ['as' => 'materials.update', 'uses' => 'MaterialsController@update']);
Route::post('/materials', ['as' => 'materials.store', 'uses' => 'MaterialsController@store']);

Route::get('/material_units/', ['as' => 'material_units', 'uses' => 'MaterialUnitsController@index']);
Route::get('/material_units/create', ['as' => 'material_units.create', 'uses' => 'MaterialUnitsController@create']);
Route::get('/material_units/{id}/edit', ['as' => 'material_units.edit', 'uses' => 'MaterialUnitsController@edit']);
Route::get('/material_units/{id}/destroy', ['as' => 'material_units.destroy', 'uses' => 'MaterialUnitsController@destroy']);
Route::put('/material_units/{id}/update', ['as' => 'material_units.update', 'uses' => 'MaterialUnitsController@update']);
Route::post('/material_units', ['as' => 'material_units.store', 'uses' => 'MaterialUnitsController@store']);

Route::get('/material_types/', ['as' => 'material_types', 'uses' => 'MaterialTypesController@index']);
Route::get('/material_types/create', ['as' => 'material_types.create', 'uses' => 'MaterialTypesController@create']);
Route::get('/material_types/{id}/edit', ['as' => 'material_types.edit', 'uses' => 'MaterialTypesController@edit']);
Route::get('/material_types/{id}/destroy', ['as' => 'material_types.destroy', 'uses' => 'MaterialTypesController@destroy']);
Route::put('/material_types/{id}/update', ['as' => 'material_types.update', 'uses' => 'MaterialTypesController@update']);
Route::post('/material_types', ['as' => 'material_types.store', 'uses' => 'MaterialTypesController@store']);

Route::get('/material_statuses/', ['as' => 'material_statuses', 'uses' => 'MaterialStatusesController@index']);
Route::get('/material_statuses/create', ['as' => 'material_statuses.create', 'uses' => 'MaterialStatusesController@create']);
Route::get('/material_statuses/{id}/edit', ['as' => 'material_statuses.edit', 'uses' => 'MaterialStatusesController@edit']);
Route::get('/material_statuses/{id}/destroy', ['as' => 'material_statuses.destroy', 'uses' => 'MaterialStatusesController@destroy']);
Route::put('/material_statuses/{id}/update', ['as' => 'material_statuses.update', 'uses' => 'MaterialStatusesController@update']);
Route::post('/material_statuses', ['as' => 'material_statuses.store', 'uses' => 'MaterialStatusesController@store']);

Route::get('/material_groups/', ['as' => 'material_groups', 'uses' => 'MaterialGroupsController@index']);
Route::get('/material_groups/create', ['as' => 'material_groups.create', 'uses' => 'MaterialGroupsController@create']);
Route::get('/material_groups/{id}/edit', ['as' => 'material_groups.edit', 'uses' => 'MaterialGroupsController@edit']);
Route::get('/material_groups/{id}/destroy', ['as' => 'material_groups.destroy', 'uses' => 'MaterialGroupsController@destroy']);
Route::put('/material_groups/{id}/update', ['as' => 'material_groups.update', 'uses' => 'MaterialGroupsController@update']);
Route::post('/material_groups', ['as' => 'material_groups.store', 'uses' => 'MaterialGroupsController@store']);
