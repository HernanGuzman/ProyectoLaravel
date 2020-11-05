<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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



    
    protected $hidden = [
        'Password', 'remember_token',
    ];

    
}
