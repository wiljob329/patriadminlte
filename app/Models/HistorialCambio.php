<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialCambio extends Model
{

    //investigar observer en laravel
    use HasFactory;

    protected $table = 'historial_cambios';

    protected $guarded = ['id'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
