<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'divisiones';
    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(Gerencia::class, 'id', 'gerencia_id');
    }
}
