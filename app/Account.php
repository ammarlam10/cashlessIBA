<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'account', 'amount', 'user_id', 'type' ];

    public function role()
    {
        return $this->belongsTo('App\User');
    }    
}
