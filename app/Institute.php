<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
	protected $fillable = [
        'name','area'
    ];
     protected $table = 'institutes';


     
	public function user()
    {
        return $this->hasMany('App\User');
    }
}
