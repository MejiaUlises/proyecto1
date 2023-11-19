<!-- resources/views/cotizaciones/create.blade.php -->

@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Nueva Cotización</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cotizaciones.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="text" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="detalle">Detalle:</label>
                <input type="text" name="detalle" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="text" name="total" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fechainiciofin">Fecha Inicio/Fin:</label>
                <input type="text" name="fechainiciofin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
                <select name="id_cliente" class="form-control">
                    <option value="">Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_tipo">Tipo:</label>
                <select name="id_tipo" class="form-control">
                    <option value="">Selecciona un tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cotización</button>
        </form>
    </div>
@endsection
