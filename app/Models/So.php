<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class So extends Model
{
    use HasFactory;

    public $table = 'sistemasoperativos';

    protected $primaryKey = 'soid';
     protected $fillable = [
        'nombreso'
     ];
}
