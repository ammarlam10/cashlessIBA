<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = ['from_id','to_id','amount'];
    public function wallet(){
    	return $this->hasOne('App\Wallet');
    }
}
