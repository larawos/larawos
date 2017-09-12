<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Larawos\Illuminate\Foundation\Payment\AlipayCallback;

class AlipayController extends Controller
{
    use AlipayCallback;

    public function callback(Request $request)
    {
        if ($this->paidSuccess($request)) {
            //

            die('success');
        } else {
            //

            die('fail');
        }
    }
}
