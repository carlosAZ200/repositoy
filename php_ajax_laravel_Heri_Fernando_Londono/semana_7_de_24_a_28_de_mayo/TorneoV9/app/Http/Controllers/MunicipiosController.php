<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Http\Requests\StoreMunicipiosRequest;

class MunicipiosController extends Controller
{
    /* private $municipios = array(
        array('municipio' => 'Manizales'),
        array('municipio' => 'Medellín'),
        array('municipio' => 'Bogotá'),
        array('municipio' => 'Barranquilla')
    ); */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::all();

        return view('municipios.index')->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMunicipiosRequest $request)
    {
        /* $request->validate([
            'municipio' => 'required'
        ]); */

        $municipio = new Municipio();
        $municipio->nombre = $request->municipio;
        $municipio->save();
        /* return "Guardado"; */
        return redirect()->route('municipios.index')->with('status','Municipio creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* return view('municipios.show')->with('id', $id); */
        $municipios = Municipio::all();
        return view('municipios.show')->with('id', $id)->with('municipio', $municipios->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('municipios.edit')->with('id', $id);
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
