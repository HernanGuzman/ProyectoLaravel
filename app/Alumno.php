<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
     protected $table = 'alumnos';
    protected $primaryKey = 'IdAlumno';
    protected $fillabble[
    	'Nombre',
    	'DNI',
    	'Email',
    	'Telefono',
    	'Division'
    ];
}
