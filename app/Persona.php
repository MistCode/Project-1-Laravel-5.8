<?php

namespace Lavel;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function registro()
    {
        return $this->belongsTo('Lavel\Registro');
    }
}
