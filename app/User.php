<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','institute_id','wallet_id','account'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Id error?
     public function institute()
    {
        return $this->belongsTo('App\Institute');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function wallet()
    {
        return $this->belongsTo('App\Wallet');
    }
}
