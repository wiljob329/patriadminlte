<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desincorporacion extends Model
{
    use HasFactory;

    protected $table = 'desincorporaciones';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo_id');
    }
}
