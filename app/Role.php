<?php

namespace Lavel;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
    	return $this
    	->belongsToMany('Lavel\User')
    	->withTimestamps();
    }
}
