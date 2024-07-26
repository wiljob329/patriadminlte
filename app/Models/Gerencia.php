<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
    use HasFactory;

    protected $table = 'gerencias';

    protected $guarded = ['id'];

    public function divisiones()
    {
        return $this->hasMany(Division::class, 'gerencia_id');
    }
}
