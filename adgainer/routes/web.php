<?php
Route::group( [ 'middleware' => [ 'auth' ] ], function () {
    Route::get( 'accounts', [ 'uses' => 'AccountController@index' ] );
    Route::get( 'account/details/{account_id}', [ 'uses' => 'AccountController@details', 'as' => 'accountDetails' ] );
    Route::get( 'account/edit/{account_id}', [ 'uses' => 'AccountController@edit' ] );
    // form submitted
    Route::post( 'account/submit-edit/{account_id}', [ 'uses' => 'AccountController@submitEdit' ] );

    // campaigns
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
    Route::get( 'campaign-tools/mycampaign', [ 'uses' => 'CampaignToolController@myCampaign' ] );
    Route::get( 'campaign-tools/all-campaigns', [ 'uses' => 'CampaignToolController@allCampaigns' ] );
    // reports
    Route::get( 'account/get-table', [ 'uses' => 'AccountController@tableReports', 'as' => 'account-reports' ] );
    Route::get( 'campaign/get-table', [ 'uses' => 'CampaignController@tableReports', 'as' => 'campaign-reports' ] );
} );
