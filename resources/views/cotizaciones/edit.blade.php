<!-- resources/views/cotizaciones/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Cotización</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cotizaciones.update', $cotizacion->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="text" name="fecha" class="form-control" value="{{ $cotizacion->fecha }}" required>
            </div>
            <div class="form-group">
                <label for="detalle">Detalle:</label>
                <input type="text" name="detalle" class="form-control" value="{{ $cotizacion->detalle }}" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" name="total" class="form-control" value="{{ $cotizacion->total }}" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" class="form-control" value="{{ $cotizacion->tipo }}" required>
            </div>
            <div class="form-group">
                <label for="fechainiciofin">Fecha Inicio/Fin:</label>
                <input type="text" name="fechainiciofin" class="form-control" value="{{ $cotizacion->fechainiciofin }}" required>
            </div>
            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
                <select name="id_cliente" class="form-control">
                    <option value="">Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $cotizacion->id_cliente == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_tipo">Tipo:</label>
                <select name="id_tipo" class="form-control">
                    <option value="">Selecciona un tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}" {{ $cotizacion->id_tipo == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Cotización</button>
        </form>
    </div>
@endsection
