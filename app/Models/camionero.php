<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class camionero extends Model
{
    use HasFactory;

    protected $fillable = ['dni','poblacion','nombre','telefono','direccion','salario'];

    public function camiones() {
        return $this->hasMany(camion::class);
    }


    public function paquetes() {
        return $this->hasMany(paquete::class);
    }
}