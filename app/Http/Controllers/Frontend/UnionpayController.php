<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Larawos\Illuminate\Foundation\Payment\UnionpayCallback;

class UnionpayController extends Controller
{
    use UnionpayCallback;

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
