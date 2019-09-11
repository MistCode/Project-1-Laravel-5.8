<?php

namespace Lavel;

use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    protected $fillable = ['name','slug','avatar','describir'];
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}

	public function mensajes()
	{
		return $this->hasMany('Lavel\Mensaje');
	}
}
