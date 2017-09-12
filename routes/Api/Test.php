<?php

/**
 * Backend Controllers
 * All route names are prefixed with 'backend.'.
 */
Route::get('/', 'UserController@index')->name('user.index');
