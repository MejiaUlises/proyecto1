<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;
use App\Models\Cliente;
use App\Models\Tipo;

class CotizacionController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacion::all();
        return view('cotizaciones.index', compact('cotizaciones'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $tipos = Tipo::all();
        return view('cotizaciones.create', compact('clientes', 'tipos'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|string',
            'detalle' => 'required|string',
            'total' => 'required|string',
            'tipo' => 'required|string',
            'fechainiciofin' => 'required|string',
            'id_cliente' => 'nullable|exists:cliente,id',
            'id_tipo' => 'nullable|exists:tipo,id',
        ]);

        Cotizacion::create($request->all());

        return redirect()->route('cotizaciones.index')->with('success', 'Cotización creada correctamente.');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacion = Cotizacion::find($id);
        return view('cotizaciones.show', compact('cotizacion'));
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacion = Cotizacion::find($id);
        $clientes = Cliente::all();
        $tipos = Tipo::all();
        return view('cotizaciones.edit', compact('cotizacion', 'clientes', 'tipos'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|string',
            'detalle' => 'required|string',
            'total' => 'required|string',
            'tipo' => 'required|string',
            'fechainiciofin' => 'required|string',
            'id_cliente' => 'nullable|exists:cliente,id',
            'id_tipo' => 'nullable|exists:tipo,id',
        ]);

        $cotizacion = Cotizacion::find($id);
        $cotizacion->update($request->all());

        return redirect()->route('cotizaciones.index')->with('success', 'Cotización actualizada correctamente.');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cotizacion = Cotizacion::find($id);
        $cotizacion->delete();

        return redirect()->route('cotizaciones.index')->with('success', 'Cotización eliminada correctamente.');
    }
}
