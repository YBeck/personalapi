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

Route::resource('personal-info', 'personalInfoController')->only([
    'index'
]);
Route::resource('education', 'educationController')->only([
    'index', 'show'
]);
Route::resource('employment', 'employmentController')->only([
    'index', 'show'
]);
Route::resource('projects', 'projectsController')->only([
    'index', 'show'
]);

Route::fallback(function(){
    return response()->json(['errors' => [
    'status' => '404',
    'source' => [
        'pointer' => $_SERVER['REQUEST_URI']
    ],
    'details' => 'Resource not found.'
  ]], 404);
});