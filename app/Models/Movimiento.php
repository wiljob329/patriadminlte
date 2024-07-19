<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimientos';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo_id');
    }

    public function nuevoCustodio()
    {
        return $this->belongsTo(Responsable::class, 'nuevo_custodio');
    }
}
