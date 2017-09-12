<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Larawos\Illuminate\Foundation\Image\ResponseQrcodeForRequest;

class QrcodeController extends Controller
{
    use ResponseQrcodeForRequest;
}
