<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Larawos\Illuminate\Foundation\Payment\WechatpayCallback;
use Omnipay\WechatPay\Helper;

class WechatpayController extends Controller
{
    use WechatpayCallback;

    public function callback(Request $request)
    {
        if ($this->paidSuccess($request)) {
            //

            die(Helper::array2xml([
                    'return_code' => 'SUCCESS',
                    'return_msg'  => 'OK',
                ]));
        } else {
            //

            die(Helper::array2xml([
                    'return_code' => 'FAIL',
                    'return_msg'  => '服务器异常，用户丢单。',
                ]));
        }
    }
}
