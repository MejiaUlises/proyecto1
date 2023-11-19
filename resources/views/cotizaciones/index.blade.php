@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Listado de Cotizaciones</h2>

        <a href="{{ route('cotizaciones.create') }}" class="btn btn-primary">Nueva Cotización</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Detalle</th>
                    <th>Total</th>
                    <th>Tipo</th>
                    <th>Fecha Inicio/Fin</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cotizaciones as $cotizacion)
                    <tr>
                        <td>{{ $cotizacion->id }}</td>
                        <td>{{ $cotizacion->fecha }}</td>
                        <td>{{ $cotizacion->detalle }}</td>
                        <td>{{ $cotizacion->total }}</td>
                        <td>{{ $cotizacion->tipo }}</td>
                        <td>{{ $cotizacion->fechainiciofin }}</td>
                        <td>{{ $cotizacion->cliente ? $cotizacion->cliente->nombre : 'Sin cliente' }}</td>
                        <td>
                            <a href="{{ route('cotizaciones.show', $cotizacion->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('cotizaciones.edit', $cotizacion->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cotizaciones.destroy', $cotizacion->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta cotización?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
