<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','descripcion','destinatario','direccion'];

    public function camioneros() {
        return $this->belongsTo(camionero::class);
    }
}
