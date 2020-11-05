<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'IdRol';

	public $timestamps =  false;
    

    protected $fillable = [
    	'Nombre',
    	'Descripcion'
    ];


}
