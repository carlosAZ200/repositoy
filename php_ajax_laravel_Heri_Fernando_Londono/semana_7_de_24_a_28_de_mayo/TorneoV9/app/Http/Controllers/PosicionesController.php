<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posicion;
use App\Http\Requests\StorePosicionesRequest;

class PosicionesController extends Controller
{
    /* private $posiciones = array(
        array('posicion' => 'Delantero'),
        array('posicion' => 'Volante'),
        array('posicion' => 'Portero'),
        array('posicion' => 'Defensa')
    ); */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posiciones = Posicion::all();
        return view('posiciones.index')->with('posiciones', $posiciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posiciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosicionesRequest $request)
    {
        /* $request->validate([
            'posicion' => 'required'
        ]); */

        $posicion = new Posicion();
        $posicion->nombre = $request->posicion;
        $posicion->save();
        /* return "Guardado"; */
        return redirect()->route('posiciones.index')->with('status', 'Posición creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posiciones = Posicion::all();
/*         return view('posiciones.show')->with('id', $id); */
        return view('posiciones.show')->with('id', $id)->with('posicion', $posiciones->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posiciones.edit')->with('id', $id);
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
