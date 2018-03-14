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

// TODO: add auth:api
Route::group( [ 'namespace' => 'Autoissue' ], function () {
    Route::get( 'campaigns/{account_id}', 'AutoissueController@getCampaigns' );
    Route::get( 'intec-clients/{campaign_id}', 'AutoissueController@getIntecClients' );
    Route::post( 'update-client-number', 'AutoissueController@updateClientNumber' );
    Route::get( 'schedule-list/{client_id}', 'AutoissueController@scheduleList' );
    Route::post( 'schedule-plan-create', 'AutoissueController@schedulePlanCreate' );
    Route::post( 'schedule-set-inuse', 'AutoissueController@scheduleSetInuse' );
    Route::post( 'schedule-plan-delete', 'AutoissueController@schedulePlanDelete' );
    Route::post( 'acquire-phone-numbers', 'AutoissueController@acquirePhoneNumbers' );
} );