<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    // 
    protected $fillable = ['balance','institute_id','institute_balance'];


    public function transaction(){

    	return $this->belongsToMany('App\Transaction');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
