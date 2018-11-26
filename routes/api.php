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

Route::get('/admins', 'AdminController@index');
Route::get('/admins/{admin}', 'AdminController@show');

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group([
        'namespace' => 'App\Http\Controllers\Admin',
    ], function ($api) {
        $api->get('/admins', 'AdminController@index');
        $api->get('/admins/{id}', 'AdminController@show');
    });

});
