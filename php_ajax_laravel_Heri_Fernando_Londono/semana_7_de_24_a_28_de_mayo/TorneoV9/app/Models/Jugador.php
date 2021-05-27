<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table = 'jugadores';

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function posicion()
    {
        return $this->belongsTo(Posicion::class);
    }
}
