<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Auth
Route::get('login', 'Backend\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Backend\Auth\LoginController@login');
Route::post('logout', 'Backend\Auth\LoginController@logout')->name('logout');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['backend']], function () {
    /*
     * These routes need view-backend permission
     */
    includeRouteFiles(__DIR__.'/Backend/');
});
