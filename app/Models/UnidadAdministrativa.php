<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadAdministrativa extends Model
{
    use HasFactory;

    protected $table = 'unidades_administrativas';

    protected $guarded = ['id'];

    public function activos()
    {
        return $this->hasMany(Activo::class, 'unidad_administrativa_id');
    }
}
