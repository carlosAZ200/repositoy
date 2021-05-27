<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicioController;

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PosicionesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// /* Route::get('/', function () {
//     return view('welcome');
// }); */
// Route::get('/', function () {
//     return 'Pantalla principal';
// });
// Route::get('equipos', function () {
//     return 'Listado de equipos';
// });
// Route::get('equipos/create', function () {
//     return 'Crear equipo';
// });
// Route::get('equipos/{id}', function ($id) {
//     return 'Detalle de equipo $id'." = ".$id;
// });
// Route::get('equipos/{id}/edit', function ($id) {
//     return 'Modificar equipo $id'." = ".$id;
// });

/* Route::get('/', function () {
    return view('inicio');
}); 


Route::get('equipos', function () {
    return view('equipos.index');
});
Route::get('equipos/create', function () {
    return view('equipos.create');
});
Route::get('equipos/{id}', function ($id) {
    return view('equipos.show')->with('id', $id);
});
Route::get('equipos/{id}/edit', function ($id) {
    return view('equipos.edit')->with('id', $id);
}); */

Route::get('/', [InicioController::class, 'index']);
/* El primero es nombre de la clase controllador,
el segundo es el metodo del mismo al cual hace referencia */


Route::resource('equipos', EquiposController::class);
/* El primero es la ruta y el segundo el nombre del controlador */
/* No necesita la URI porque ya tiene una acción (método o función) 
definida según la URI ingresada

cuando:

URI - ACCIÓN
equipos - index
equipos/create - create
-----------> equipos - store <---------------
equipos/{id} - show
equipos/{id}/edit - edit
----------> equipos/{id} - update <-------------
----------> equipos/{id} - destroy <----------

las tres de ellas seleccionadas no tiene vista
por lo que no es considerable una contradicción
con las que tiene la misma URI, pero ejecutan otra acción.
Estas tres seleccionadas son acciones de que se hacen.
Las vistas de estas tres seleccionadas SÍ se pueden hacer. */




// /* 
//     | Escribir en el archivo de rutas, (web.php), el código necesario 
//     | para crear las rutas mostradas en la tabla. Probar en el navegador. 
// */

// Route::get('jugadores', function () {
//     return 'Listado de jugadores';
// });
// Route::get('jugadores/create', function () {
//     return 'Crear jugadores';
// });
// Route::get('jugadores/{id}', function ($id) {
//     return 'Detalle de jugador $id'." = ".$id;
// });
// Route::get('jugadores/{id}/edit', function ($id) {
//     return 'Modificar jugador $id'." = ".$id;
// });


Route::resource('jugadores', JugadoresController::class);
/* Route::get('jugadores', function () {
    return view('jugadores.index');
});
Route::get('jugadores/create', function () {
    return view('jugadores.create');
});
Route::get('jugadores/{id}', function ($id) {
    return view('jugadores.show')->with('id', $id); */
    /* de este with el primero es la variable que 
    se va ha pasar en lugar de pasar un array completo

    la segunda es la clave para acceder a estos valores enviados
    a través de la uri quien es el input en la función, que 
    esta a su vez la toma de la uri

    ejem: 
    id=$id
        en url
    id=2
        en el blade 
    {{$id}}

    ésta última key corresponde a la asignada en la url 
    enviada por la función.

    ejem:
        od=$id
    en el blade
        {{$od}}
    
    
 });
Route::get('jugadores/{id}/edit', function ($id) {
    return view('jugadores.edit')->with('id', $id);
});*/

Route::resource('municipios', MunicipiosController::class);


/* Route::get('municipios', function () {
    return view('municipios.index');
});
Route::get('municipios/create', function () {
    return view('municipios.create');
});
Route::get('municipios/{id}', function ($id) {
    return view('municipios.show')->with('id', $id);
});
Route::get('municipios/{id}/edit', function ($id) {
    return view('municipios.edit')->with('id', $id);
}); */


Route::resource('posiciones', PosicionesController::class);

/* Route::get('posiciones', function () {
    return view('posiciones.index');
});
Route::get('posiciones/create', function () {
    return view('posiciones.create');
});
Route::get('posiciones/{id}', function ($id) {
    return view('posiciones.show')->with('id', $id);
});
Route::get('posiciones/{id}/edit', function ($id) {
    return view('posiciones.edit')->with('id', $id);
}); */





// /* 
//     | Vistas con método with, con segundos parametros array asociativo

//     | el método with indica una a una las variables en lugar de pasar un array. 
// */


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('catalog/show/{id}', function ($id) {
//     return view('catalog.show', array('id '=> $id));
// });
// Route::get('catalog/show/{id}', function ($id) {
//     return view('catalog.show')->with('id', $id);
// });





