<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActCondicion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'act_condiciones';
    protected $guarded = [];
    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id', 'condicion_id');
    }
}
