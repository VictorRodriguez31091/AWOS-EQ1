<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importar nuestro modelo o modelos a ocupar
use App\Materias;

//Mandamos llamae al request a traves de un alias
use App\Http\Requests\MateriasVic as MateriasRequest;


class Materiascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Creamos un constructor que sirve para que antes de que se ejecute cualquier
     //funcion, valide que se cumpla todo lo que esta dentro del constructor

     protected $materias;

     public function __construct (Materias $materia) {
         $this->materia=$materia;

     }

    public function index()
    {
        //Eloquen de laravel
        //select*from materias:
        $materias = Materias::all();
        //retorna el array en formato json
        return response()->json(['materias'->$materias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaRequest $request)
    {
        //return $request
            $materia = $this->materia->Create($request->all());
            return response()->json($materia);
        //return response()->json(new MateriaRequests($materia),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$materias se le conoce como un enlace implicito por que al listas la ruta por ende nos manda a materias
    public function show($id)
    {
        //
        $materia = Materias::find($id);

        return $materia;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
