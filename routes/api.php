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



Route::group(['middleware' => ['api', 'multiauth:admin,api']], function () {
    Route::get('/', function(){
        echo '******************';
    });
    Route::get('/admin', function ($request) {
        dd($request);
        // Get the logged admin instance
        //return $request->user(); // You can use too `$request->user('admin')` passing the guard.
    });

    Route::get('dataCheck', 'Api\LoginController@dataCheck');
});