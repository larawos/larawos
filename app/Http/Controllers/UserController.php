<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserIndexResource;

class UserController extends Controller
{
    /**
     * 暂无说明
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return api(
                UserIndexResource::make(User::paginate(50))
            );
    }
}
