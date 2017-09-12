<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class User extends Model
{
    use SoftDeletes, Searchable;

    protected $fillable = ['avatar_id', 'nickname', 'status'];

    protected $dates = ['deleted_at'];

    public function user_account()
    {
        return $this->hasOne(\App\Models\UserAccount::class, 'user_id');
    }

    public function admin_account()
    {
        return $this->hasOne(\App\Models\AdminAccount::class, 'user_id');
    }
}
