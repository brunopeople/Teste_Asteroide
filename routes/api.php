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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/students', 'ApiController@getAllStudents');
Route::get('/api/students/{id}', 'ApiController@getStudent');
Route::post('/api/students', 'ApiController@createStudent');
Route::put('/api/students/{id}', 'ApiController@updateStudent');
Route::delete('/api/students/{id}','ApiController@deleteStudent');