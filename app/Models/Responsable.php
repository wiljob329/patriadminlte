<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';

    protected $guarded = ['id'];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    public function activos()
    {
        return $this->hasMany(Activo::class, 'responsable_id');
    }
}
