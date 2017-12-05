<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    // 
    public function transaction(){

    	return $this->belongsToMany('App\Transaction');
    }
}
