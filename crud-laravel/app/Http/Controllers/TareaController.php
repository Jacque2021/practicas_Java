<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Http\Requests\TareaRequest;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$tareas=Tarea::orderByDesc('id')->get();
        //return view('tarea.index', compact('tareas'));
        return view('tarea.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aqui se agrega la ruta que debe de abrir, en este caso de la carpeta tarea y el archivo llamado create.blade.php
        return view("tarea.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TareaRequest $request)
    {
        //manda llamar a la interfaz para insertar los datos de create
        //$requies es tipo de objeto que trae toda la información de la solicitud actual
        //esta ruta de tarea.store se agrega en el formularion de create.blade.php
        //aqui se configura que los datos son obligatorios para registrar
        $datos=$request->validated();

        //dd($datos);//es para mostrar en tipo consulta los datos registrados pero en formato codigo
        $tarea=Tarea::create($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tarea.show', ['tarea'=>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        //
        $datos=$request->validated();
        $tarea->update($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
