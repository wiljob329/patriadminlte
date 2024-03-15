<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    protected $guarded = [];

    public function actadquisicione()
    {
        return $this->belongsTo(ActAdquisicione::class, 'adquisicion_id', 'id');
    }
}
