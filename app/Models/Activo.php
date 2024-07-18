<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $table = 'activos';

    protected $guarded = ['id'];

    public function formaAdquisicion()
    {
        return $this->belongsTo(FormaAdquisicion::class, 'forma_adquisicion_id');
    }

    public function act_tipo()//averiguar que es el tipo
    {
        return $this->belongsTo(ActTipo::class, 'tipo_id', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function condicionFisica()
    {
        return $this->belongsTo(CondicionFisica::class, 'condicion_fisica_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function estadoActivo()
    {
        return $this->belongsTo(EstadoActivo::class, 'estado_activo_id');
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_id');
    }

    public function categoriaEspecifica()
    {
        return $this->belongsTo(CategoriaEspecifica::class, 'categoria_especifica_id');
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class, 'moneda_id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }

    public function unidadAdministrativa()
    {
        return $this->belongsTo(UnidadAdministrativa::class, 'unidad_administrativa_id');
    }
}
