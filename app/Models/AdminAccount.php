<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminAccount extends Authenticatable
{
    use Notifiable, SoftDeletes;

    public $incrementing = false;

    protected $primaryKey = 'user_id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable  = ['username', 'password', 'api_token', 'logined_ip', 'login_type', 'logined_at'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
