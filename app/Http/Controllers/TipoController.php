<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TipoController extends Controller
{
    /**
     * Muestra una lista de los tipos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));
    }

    /**
     * Muestra el formulario para crear un nuevo tipo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Almacena un nuevo tipo en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
        ]);

        Tipo::create($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo creado correctamente.');
    }

    /**
     * Muestra la información de un tipo específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.show', compact('tipo'));
    }

    /**
     * Muestra el formulario para editar un tipo específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.edit', compact('tipo'));
    }

    /**
     * Actualiza un tipo específico en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
        ]);

        $tipo = Tipo::find($id);
        $tipo->update($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo actualizado correctamente.');
    }

    /**
     * Elimina un tipo específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();

        return redirect()->route('tipos.index')->with('success', 'Tipo eliminado correctamente.');
    }
}
