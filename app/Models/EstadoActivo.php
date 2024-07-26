<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoActivo extends Model
{
    use HasFactory;

    protected $table = 'estados_activos';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->hasMany(Activo::class, 'estado_activo_id');
    }
}
