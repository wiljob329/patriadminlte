<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActCatgeneral extends Model
{
    use HasFactory;

    protected $table = 'act_catgenerales';

    protected $guarded = [];

    public function actcatespecifica()
    {
        return $this->hasMany(ActCatespecifica::class, 'id', 'categoria_id');
    }
}
