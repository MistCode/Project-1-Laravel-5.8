<?php

namespace Lavel;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = ['name','mensaje'];

    public function comunidad()
    {
    	return $this->belongsTo('Lavel\Comunidad');
    }
}
