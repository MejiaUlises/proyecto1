<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='cliente';

    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class, 'id_cliente');
    }
}
