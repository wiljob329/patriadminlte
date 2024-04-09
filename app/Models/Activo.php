<?php

namespace App\Models;

use App\Http\Controllers\ActTipoController;
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

    public function ActTipo()
    {
        return $this->belongsTo(ActTipo::class, 'tipo_id', 'id');
    }

    public function ActMarca()
    {
        return $this->belongsTo(ActMarca::class, 'marca_id', 'id');
    }

    public function ActCondion()
    {
        return $this->belongsTo(ActCondicion::class, 'condicion_id', 'id');
    }

    public function ActColor()
    {
        return $this->belongsTo(ActColor::class, 'color_id', 'id');
    }
    public function ActDesincorporacion()
    {
        return $this->belongsTo(ActDesincorporacion::class, 'adquisicion_id', 'id');
    }
}
