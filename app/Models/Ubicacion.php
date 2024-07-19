<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $table = 'ubicaciones';

    protected $guarded = ['id'];

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }

    public function activos()
    {
        return $this->hasMany(Activo::class, 'ubicacion_id');
    }
}
