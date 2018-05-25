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

Route::apiResources([
    'personal-info' => 'personalInfoController',
    'education' => 'educationController',
    'education/id' => 'educationController',
    'employment' => 'employmentController',
    'employment/id' => 'employmentController',
    'projects' => 'projectsController',
    'projects/id' => 'projectsController'
]);