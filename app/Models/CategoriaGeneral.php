<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaGeneral extends Model
{
    use HasFactory;

    protected $table = 'categorias_generales';

    protected $guarded = ['id'];

    public function subCategoria()
    {
        return $this->hasMany(SubCategoria::class, 'id', 'categoria_general_id');
    }
}
