<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente_tipo extends Model
{
    use HasFactory;

    protected $table = 'componente_tipo';

    public function componentes(){
        return $this->hasMany('App\Models\Componente', 'componente_tipo_id', 'id');
    }
}
