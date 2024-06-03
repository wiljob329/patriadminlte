<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'gerencias';
    protected $guarded = [];

    public function gerencia()
    {
        return $this->belongsTo(Division::class, 'gerencia_id', 'id');
    }
}
