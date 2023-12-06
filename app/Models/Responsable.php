<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;
    public $table = 'responsables';
    
//Para que permita el paso de mi llave primaria que no tiene un nombre predeterminado "id", debo usar $primaryKey
    protected $primaryKey = 'responsableid';

    protected $fillable = [
        'nombres',
        'apellidopaterno',
        'apellidomaterno',
        'matricula',
        'correo',
    ];

}
