<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciacion extends Model
{
    use HasFactory;

    protected $table = 'depreciaciones';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo_id');
    }
}
