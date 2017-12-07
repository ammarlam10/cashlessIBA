<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    // 
    protected $fillable = ['balance','institute_id'];


    public function transaction(){

    	return $this->belongsToMany('App\Transaction');
    }
}
