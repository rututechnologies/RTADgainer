<?php

// campaigns
Route::get( 'campaigns/{account_id}', 'CampaignController@getCampaigns' );
Route::get( 'campaign-rows/{account_id}', 'CampaignController@getCampaignRows' );