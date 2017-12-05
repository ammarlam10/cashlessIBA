<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function wallet(){
    	return $this->hasOne('App\Wallet');
    }
}
