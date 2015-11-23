<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{    
	protected $table = "Cliente";
	protected $fillable = ['Nombre', 'Direccion', 'NombreContacto', 'Email', 'Estado'];

	public function Proyectos() {
		return $this->hasMany("App\Proyecto");
	}
}
