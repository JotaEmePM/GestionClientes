<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    //
    protected $table = "OrdenTrabajo";
	protected $fillable = ['Nombre', 'Estado', 'HorasTotales','Consumidas'];

	public function Proyecto() {
		return $this->belongsTo('App\Proyecto');
	}
}
