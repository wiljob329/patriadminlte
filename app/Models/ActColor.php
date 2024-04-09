<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActColor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'act_colores';
    protected $guarded = [];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id', 'color_id');
    }
}
