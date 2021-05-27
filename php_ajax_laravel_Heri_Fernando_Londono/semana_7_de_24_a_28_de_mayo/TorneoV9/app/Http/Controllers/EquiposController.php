<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Equipo;
use App\Http\Requests\StoreEquiposRequest;


class EquiposController extends Controller
{
    /* private $equipos = array(
        array(
            'nombre' => 'Once caldas',
            'dt' => 'Eduardo Lara',
            'municipio' => 'Manizales',
            'escudo' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Once_Caldas_logo-svg.svg'
        ),
        array(
            'nombre' => 'Nacional',
            'dt' => 'Alexandre Guimaraes',
            'municipio' => 'Medellin',
            'escudo' => 'https://logodownload.org/wp-content/uploads/2018/03/atletico-nacional-logo-escudo.png'
        ),
        array(
            'nombre' => 'Santa fe',
            'dt' => 'Harold Rivera Roa',
            'municipio' => 'Bogota',
            'escudo' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Escudo_de_Independiente_Santa_Fe.svg'
        ),
        array(
            'nombre' => 'Junior',
            'dt' => 'Luis Amaranto Perea',
            'municipio' => 'Barranquilla',
            'escudo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Escudo_de_Atl%C3%A9tico_Junior.svg'
        )
    ); */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index')->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        return view('equipos.create')->with('municipios', $municipios);
        /* retorna todos los municipios de la tabla municipios */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquiposRequest $request)
    {
        /* return $request->input("nombre");
        return $request->nombre; */
       
        if ($request->hasFile('escudo')) {
            $file = $request->file('escudo');
            $escudo = time() . $file->getClientOriginalName();
            $file->move("images/equipos", $escudo);
        }
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        /* $request->nombre corresponde al nombre en el formulario (
            input por ejemplo
        ), pero $equipo->nombre corresponde al campo en la bd*/
        $equipo->dt = $request->dt;
        $equipo->municipio_id = $request->municipio;
        $equipo->escudo = $escudo;
        $equipo->save();
        /* save() guarda los cambios para hacer insert o update */
        // return "Guardado";
        return redirect()->route('equipos.index')->with('status','Equipo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* return view('equipos.show')->with('id', $id)->with('equipo', $this->equipos[$id]); */
        $equipos = Equipo::all();
        return view('equipos.show')->with('id', $id)->with('equipo', $equipos->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('equipos.edit')->with('id', $id);
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
