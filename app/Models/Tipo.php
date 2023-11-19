<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='tipo';
    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class, 'id_tipo');
    }
}
