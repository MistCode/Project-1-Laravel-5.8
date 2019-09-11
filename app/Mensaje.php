<?php

namespace Lavel;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    public function comunidad()
    {
        return $this->belongsTo('Lavel\Comunidad');
    }
}
