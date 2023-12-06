<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    public $table = 'oficinas';

    protected $primaryKey = 'oficinaid';

    protected $fillable = [
        'nombreoficina',
        'areaid'
    ];

}
