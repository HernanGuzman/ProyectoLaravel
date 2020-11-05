<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth

class Usuario extends Models
{
    protected $table = 'usuario';
    protected $primaryKey = 'IdUsuario';
    

	public $timestamps =  false;
    

    protected $fillable = [
    	'Nombre',
    	'Direccion',
    	'Telefono',
    	'Mail',
    	'Password',
    	'IdRol'
    ];


}