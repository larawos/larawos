<?php

/*
 * API Routes
 * Namespaces indicate folder structure
 * Header
 * Accept:application/json
 * Authorization:Bearer {token}
 */
Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    includeRouteFiles(__DIR__.'/Api/');
});
