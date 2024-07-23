<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    use HasFactory;

    protected $fillable = ['potencia','matricula','modelo','tipo'];

    public function camioneros() {
        return $this->belongsTo(camionero::class);
    }
    
}
