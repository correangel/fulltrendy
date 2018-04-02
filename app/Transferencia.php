<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'n_transferencia',
        'correo',
        'monto',
        'fecha',
        'condicion',
        'codigo',
        'img_transferencia'
    ];

    public function scopeCodigo($query, $codigo)
    {
        $query->where('codigo', $codigo);
    }
}
