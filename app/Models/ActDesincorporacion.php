<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActDesincorporacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'act_desincorporaciones';
    protected $guarded = [];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id', 'adquisicion_id');
    }
}
