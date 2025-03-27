<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Para crear el libro debemos hacar el llamado a nuestro modelo
use App\Models\Libro;

class LibroController extends Controller
{
    public function layout(){
        return view('layout');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('libros.index'); //lVista /resources/views/ibros/index.blade.php
        return view('libros.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
          //Validamos los datos recibidos, si no se cumple no se almacenara la información
          $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ], [
            'descripcion.required' => 'El campo descripción es obligatorio.',
            'nombre.required' => 'El campo nombre es obligatorio.',
            'autor.required' => 'El campo autor es obligatorio.',
        ]);

         // Ya podemos crear el objeto Libro vacio
        $libro = new Libro();

         // Lo llenaremos con los datos recibidos del formulario asi que seteamos los valores para:
        $libro->nombre = $request->nombre;
        $libro->descripcion = $request->descripcion;
        $libro->autor = $request->autor;

        //Almacenar los valores en la BD
        $libro->save();
        
        //return redirect()->back()->with('success','Registro del libro creado con exito');
        return redirect()->route('libros.index')->with('success', 'Registro del libro creado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
