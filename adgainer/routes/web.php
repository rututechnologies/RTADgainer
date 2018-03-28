<?php
Route::group( [ 'middleware' => [ 'auth' ] ], function () {
    Route::get( 'accounts', [ 'uses' => 'AccountController@index' ] );
    Route::get( 'account/details/{account_id}', [ 'uses' => 'AccountController@details' ] );
    Route::get( 'account/edit/{account_id}', [ 'uses' => 'AccountController@edit' ] );
    // form submitted
    Route::post( 'account/submit-edit', [ 'uses' => 'AccountController@submitEdit' ] );

    // campaigns
    Route::get( 'campaigns', [ 'uses' => 'CampaignController@index' ] );
    Route::get( 'campaign/details/{campaign_id}/{account_id}', [ 'uses' => 'CampaignController@details' ] );
    Route::get( 'campaign/create/{account_id}', [ 'uses' => 'CampaignController@create' ] );
    Route::get( 'campaign/edit/{campaign_id}/{account_id}', [ 'uses' => 'CampaignController@edit' ] );
    // form submitted
    Route::post( 'campaign/submit-create', [ 'uses' => 'CampaignController@submitCreate' ] );
    Route::post( 'campaign/submit-edit', [ 'uses' => 'CampaignController@submitEdit' ] );


    // campaign tools
    Route::get( 'campaign-tools/mycampaign', [ 'uses' => 'CampaignToolController@myCampaign' ] );
    
    
} );