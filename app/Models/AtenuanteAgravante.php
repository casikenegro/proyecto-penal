<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtenuanteAgravante extends Model
{
    use HasFactory;

    protected $table = 'agravante_atenuante';
    protected $fillable = [
        'tipo',
        'descripcion',
    ];
}
