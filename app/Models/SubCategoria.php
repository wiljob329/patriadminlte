<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    protected $table = 'subcategorias';

    protected $guarded = [];

    public function categoriaGeneral()
    {
        return $this->belongsTo(CategoriaGeneral::class, 'categoria_general_id');

    }

    public function categoriasEspecificas()
    {
        return $this->hasMany(CategoriaEspecifica::class,'subcategoria_id');
    }
}
