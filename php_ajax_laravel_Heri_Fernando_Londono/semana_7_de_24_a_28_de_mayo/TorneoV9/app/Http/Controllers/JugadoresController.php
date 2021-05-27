<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Posicion;
use App\Http\Requests\StoreJugadoresRequest;

class JugadoresController extends Controller
{


    /* private $jugadores = array(
        array(
            'foto' => 'https://cdn.soccerwiki.org/images/player/66551.png',
            'nombre' => 'Gerardo Amílcar Ortiz',
            'posicion' => 'Portero',
            'numero' => '12',
            'equipo' => 'Once caldas'
        ),
        array(
            'foto' => 'http://as00.epimg.net/img/comunes/fotos/fichas/deportistas/j/jos/large/33904.png',
            'nombre' => 'José David Moya',
            'posicion' => 'Defesa',
            'numero' => '23',
            'equipo' => 'Santa fe'
        ),
        array(
            'foto' => 'http://as00.epimg.net/img/comunes/fotos/fichas/deportistas/n/nic/large/40507.png',
            'nombre' => 'Nicolás Hernández',
            'posicion' => 'Defensa',
            'numero' => '2',
            'equipo' => 'Nacional'
        ),
        array(
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSukz684mtmtJVNOAOc1ipxzgDL6P0uL3PGkfy4FRmm0CKh2CJbn0YbH8006Q5Jdj1DFg&usqp=CAU',
            'nombre' => 'Teófilo Gutiérrez',
            'posicion' => 'Delantero',
            'numero' => '24',
            'equipo' => 'Junior'
        )
    ); */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index')->with('jugadores', $jugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $posiciones = Posicion::all();
        return view('jugadores.create')->with('equipos', $equipos)->with('posiciones', $posiciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJugadoresRequest $request)
    {
        /* $request->validate([
            'nombre' => 'required',
            'numero' => 'required',
            'equipo' => 'required',
            'posicion' => 'required',
            'foto' => 'required|image'
        ]); */

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $foto = time() . $file->getClientOriginalName();
            $file->move("images/jugadores", $foto);
        }
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->numero = $request->numero;
        $jugador->equipo_id = $request->equipo;
        $jugador->posicion_id = $request->posicion;
        $jugador->foto = $foto;
        $jugador->save();
        /* return "Guardado"; */
        return redirect()->route('jugadores.index')->with('status','Jugador creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugadores = Jugador::all();
        return view('jugadores.show')->with('id', $id)->with('jugador', $jugadores->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jugadores.edit')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
