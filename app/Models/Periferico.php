<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    use HasFactory;

    public $table = 'perifericos';

    protected $primaryKey = 'perifericoid';

    protected $fillable = [
        'serie',
        'modeloid',
        'tipoperifericoid',
    ];


}
