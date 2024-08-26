<?php

Route::group([
    'namespace' => 'Stormforcejj\Seatminingapi\Http\Controllers',
    'middleware' => ['web', 'auth'],
    'prefix' => 'api/v2/mining/'
    ], function () {
   Route::get('get/{id}', [
//       'as' => mining.api.web.mining.get,
        'uses' => 'ApiMiningController@getMiningById'
    ]);
});