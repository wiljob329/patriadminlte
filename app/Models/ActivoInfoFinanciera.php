<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivoInfoFinanciera extends Model
{
    use HasFactory;

    protected $table = 'activos_info_financiera';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo_id');
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class, 'moneda_id');
    }
}
