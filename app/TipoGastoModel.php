<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoGastoModel extends Model
{
    protected $table = 'tipo_gastos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}