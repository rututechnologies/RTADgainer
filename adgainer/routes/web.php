<?php
Route::group( [ 'middleware' => [ 'auth' ], 'prefix' => 'app' ], function () {
    Route::get( 'accounts', [ 'uses' => 'AccountController@index' ] );
    Route::get( 'account/details/{account_id}', [ 'uses' => 'AccountController@details', 'as' => 'accountDetails' ] );
    Route::get( 'account/edit/{account_id}', [ 'uses' => 'AccountController@edit' ] );
// form submitted
    Route::post( 'account/submit-edit/{account_id}', [ 'uses' => 'AccountController@submitEdit' ] );

// campaigns manager
    Route::get( 'campaigns', [ 'uses' => 'CampaignController@index' ] );
    Route::get( 'campaign/details/{campaign_id}/{account_id}', [ 'uses' => 'CampaignController@details', 'as' => 'campaignDetails' ] );
    Route::get( 'campaign/create', [ 'uses' => 'CampaignController@create' ] );
    Route::get( 'campaign/create-by-account/{account_id}', [ 'uses' => 'CampaignController@createByAccount' ] );
    Route::get( 'campaign/createCampaign/{account_id}', [ 'uses' => 'CampaignController@createByAccount' ] );
    Route::get( 'campaign/edit/{campaign_id}/{account_id}', [ 'uses' => 'CampaignController@edit' ] );
    Route::get( 'campaign/delete/{campaign_id}/{account_id}', [ 'uses' => 'CampaignController@delete' ] );
// form submitted
    Route::post( 'campaign/submit-create', [ 'uses' => 'CampaignController@submitCreate' ] );
    Route::post( 'campaign/submit-edit', [ 'uses' => 'CampaignController@submitEdit' ] );
    Route::post( 'campaign/submit-delete/{campaign_id}', [ 'uses' => 'CampaignController@submitDelete' ] );

// campaign tools
    Route::get( 'campaign-tools/mycampaigns', [ 'uses' => 'CampaignToolController@myCampaigns' ] );
    Route::get( 'campaign-tools/all-campaigns', [ 'uses' => 'CampaignToolController@allCampaigns' ] );


// goal actions
    Route::get( 'campaign/goal-actions', [ 'uses' => 'CampaignController@actionGoals' ] );
    Route::post( 'campaign/do_saveGoalAction', [ 'uses' => 'CampaignController@do_saveGoalAction' ] );
// reports
    Route::get( 'account/get-table', [ 'uses' => 'AccountController@tableReports', 'as' => 'account-reports' ] );
    Route::get( 'campaign/get-table', [ 'uses' => 'CampaignController@tableReports', 'as' => 'campaign-reports' ] );

// account - ppc detail
    Route::get( 'account/showPPCAccountDetails', [ 'uses' => 'AccountController@showPPCAccountDetails', 'as' => 'PPCAccountDetails' ] );

// campaigns
    Route::get( 'campaign/addCampaignSourceNumbers', [ 'uses' => 'CampaignController@addCampaignSourceNumbers' ] );
    Route::post( 'campaign/do_addCampaignSourceNumbers', [ 'uses' => 'CampaignController@do_addCampaignSourceNumbers' ] );
    Route::get( 'campaign/addCampaignNumbers', [ 'uses' => 'CampaignController@addCampaignNumbers' ] );
    Route::post( 'campaign/do_addCampaignNumbers', [ 'uses' => 'CampaignController@do_addCampaignNumbers' ] );
    Route::get( 'campaign/addMultiPhoneNumbers', [ 'uses' => 'CampaignController@addMultiPhoneNumbers' ] );
    Route::post( 'campaign/do_addMultiPhoneNumbers', [ 'uses' => 'CampaignController@do_addMultiPhoneNumbers' ] );
    Route::get( 'campaign/campaignSourcePhoneNumbers', [ 'uses' => 'CampaignController@campaignSourcePhoneNumbers' ] );
    Route::post( 'campaign/removeSourceCampaignNumbers', [ 'uses' => 'CampaignController@removeSourceCampaignNumbers' ] );
    Route::get( 'campaign/campaignPhoneNumbers', [ 'uses' => 'CampaignController@campaignPhoneNumbers' ] );
    Route::post( 'campaign/removeCampaignNumbers', [ 'uses' => 'CampaignController@removeCampaignNumbers' ] );
} );

// tracking
Route::get( 'adgainer/incomingdata/getCode', [ 'uses' => 'IncomingDataController@getCode' ] );
Route::get( 'adgainer/index.php/incomingdata/getCode', [ 'uses' => 'IncomingDataController@getCode' ] );
Route::get( 'adgainer/incomingdata/tagManager', [ 'uses' => 'IncomingDataController@tagManager' ] );
Route::get( 'adgainer/index.php/incomingdata/tagManager', [ 'uses' => 'IncomingDataController@tagManager' ] );
Route::get( 'incomingdata', [ 'uses' => 'IncomingDataController@index' ] );
Route::get( 'adgainer/incomingdata', [ 'uses' => 'IncomingDataController@index' ] );
Route::get( 'adgainer/index.php/incomingdata', [ 'uses' => 'IncomingDataController@index' ] );

// tracking test
Route::get( 'tracking/test', function () {
    return view( "adgainer.tracking.test" );
} );
