<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id', 'estado_id');
    }
}
