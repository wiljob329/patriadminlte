<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $guarded = ['id'];

    public function responsable()
    {
        return $this->hasMany(Responsable::class, 'cargo_id');
    }
}
