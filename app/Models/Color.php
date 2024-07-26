<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colores';

    protected $guarded = ['id'];

    public function activos()
    {
        return $this->hasMany(Activo::class, 'color_id');
    }
}
