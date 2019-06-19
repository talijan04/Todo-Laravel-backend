<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('tasks', 'TaskController@index');
Route::get('tasks/{id}', 'TaskController@show');
Route::post('tasks', 'TaskController@store');
Route::put('tasks/{id}', 'TaskController@update');
Route::delete('tasks/{id}', 'TaskController@delete');

Route::get('test/{title}', 'TaskController@test');

Route::get('tasks2', 'Task2Controller@index');
Route::get('tasks2/{id}', 'Task2Controller@show');
Route::post('tasks2', 'Task2Controller@store');
Route::put('tasks2/{id}', 'Task2Controller@update');
Route::delete('tasks2/{id}', 'Task2Controller@delete');

Route::get('test2/{title}', 'Task2Controller@test');

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
