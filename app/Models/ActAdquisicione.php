<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActAdquisicione extends Model
{
    use HasFactory;

    protected $table = 'act_adquisiciones';

    protected $guarded = [];

    public function activo()
    {
        return $this->hasMany(Activo::class, 'id', 'adquisicion_id');
    }
}
