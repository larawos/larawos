<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * 网站首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'local' == config('app.env') ? view('welcome') : redirect('/login');
    }
}
