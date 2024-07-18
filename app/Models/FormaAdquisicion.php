<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaAdquisicion extends Model
{
    use HasFactory;
    protected $table = 'formas_adquisiciones';

    protected $guarded = ['id'];

    public function activo()
    {
        return $this->hasMany(Activo::class, 'forma_adquisicion_id');
    }
}
