<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/qrcode', 'QrcodeController@qrcode')->name('qrcode.index');
// Pay Callback
Route::any('alipay/callback', 'AlipayController@callback')->name('alipay.callback');
Route::any('wechatpay/callback', 'WechatpayController@callback')->name('wechatpay.callback');
Route::any('unionpay/callback', 'UnionpayController@callback')->name('unionpay.callback');
