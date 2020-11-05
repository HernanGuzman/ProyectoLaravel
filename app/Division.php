<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'division';
    protected $primaryKey = 'IdDivision';
    public $timestamps =  false;
    protected $fillabble = [
    	'Nombre'
    	
    ];
}
