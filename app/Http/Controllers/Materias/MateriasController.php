<?php

namespace App\Http\Controllers\Materias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importar nuestro modelo o modelos a ocupar
use App\Materias;

class Materiascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



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
    public function store(Request $request)
    {
        //
        $materia = Create::all($request);
        return('el registro materia se guardo con exito');
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
