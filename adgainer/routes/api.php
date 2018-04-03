<?php

// campaigns
Route::get( 'campaigns/{account_id}', 'CampaignController@getCampaigns' );
Route::get( 'campaign-rows/{account_id}', 'CampaignController@getCampaignRows' );
Route::post( 'campaign/getClientCampaigns', 'CampaignController@getClientCampaigns' );
Route::post( 'campaign/getCampaignGoals', 'CampaignController@getCampaignGoals' );