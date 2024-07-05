<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }

}
