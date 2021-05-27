<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    use HasFactory;
    protected $table = 'posiciones';
    /* protected $table = 'posiciones'; se utiliza para 
    referenciar la tabla ya que normalmente asigna la 
    clase a la tabla con el nombre de la clase en plural posicions
    el problema radica en que la tabla se llama posiciones */

    /* si en la base de datos hay una pk diferente al id
    public $primarykey = ''; */

    /* para quitar el autp increment 
    public $incrementing = false; */

    /* si la pk no es entero
    protected $keyType = 'string';     */

    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }
}
