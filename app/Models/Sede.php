<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $table = 'sedes';

    protected $guarded = ['id'];

    public function activos()
    {
        return $this->hasMany(Activo::class, 'sede_id');
    }
    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::class);
    }
}
