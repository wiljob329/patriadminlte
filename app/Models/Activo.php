<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    protected $guarded = [];

    public function actadquisicione()
    {
        return $this->belongsTo(ActAdquisicione::class, 'adquisicion_id', 'id');
    }

    public function act_tipo()
    {
        return $this->belongsTo(ActTipo::class, 'tipo_id', 'id');
    }

    public function act_marca()
    {
        return $this->belongsTo(ActMarca::class, 'marca_id', 'id');
    }

    public function act_condicion()
    {
        return $this->belongsTo(ActCondicion::class, 'condicion_id', 'id');
    }

    public function act_color()
    {
        return $this->belongsTo(ActColor::class, 'color_id', 'id');
    }

    public function ActDesincorporaciones()
    {
        return $this->belongsTo(ActDesincorporacion::class, 'adquisicion_id', 'id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado', 'id');
    }
}
