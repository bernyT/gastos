<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GastoModel extends Model
{
    protected $table = 'gastos';
    public $timestamps = false;

    protected $fillable = [
        'importe',
        'fecha_vencimineto',
        'id_tipo_gasto',
        'fecha_pago',
    ];

    public function tipo_gasto(){
    	return $this->hasOne('App\TipoGastoModel','id', 'id_tipo_gasto');
    }
}