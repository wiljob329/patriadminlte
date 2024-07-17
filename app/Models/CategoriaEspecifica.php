<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEspecifica extends Model
{
    use HasFactory;

    protected $table = 'categorias_especificas';

    protected $guarded = ['id'];

    public function subCategoria()
    {
        return $this->belongsTo(SubCategoria::class, 'subcategoria_id', 'id');
    }
}
