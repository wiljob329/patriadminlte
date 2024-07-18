<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionFisica extends Model
{
    use HasFactory;

    protected $table = 'condiciones_fisicas';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->hasMany(Activo::class, 'condicion_fisica_id');
    }
}
