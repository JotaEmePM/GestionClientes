<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Proyecto extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
		'build_from' 	=> 	'Nombre',
		'save_to' 		=> 	'slug'
	];

    //
    protected $table = "Proyecto";
	protected $fillable = ['Codigo', 'Nombre', 'Estado'];

	public function Cliente() {
		return $this->belongsTo('App\Cliente');
	}

	public function Usuario() {
		return $this->belongsTo('App\User');
	}

	public function OrdenTrabajos() {
		return $this->hasMany('OrdenTrabajo');
	}


}
