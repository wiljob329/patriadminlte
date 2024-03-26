<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActCatespecifica extends Model
{
    use HasFactory;

    protected $table = 'act_catespecificas';

    protected $guarded = [];

    public function actcatgeneral()
    {
        return $this->belongsTo(ActCatgeneral::class, 'categoria_id', 'id');
    }
}
