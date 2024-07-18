<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;

    protected $table = 'monedas';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->hasMany(Activo::class, 'moneda_id');
    }
}
