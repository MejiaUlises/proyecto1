@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Listado de Tipos</h2>

        <a href="{{ route('tipos.create') }}" class="btn btn-primary">Nuevo Tipo</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->id }}</td>
                        <td>{{ $tipo->nombre }}</td>
                        <td>
                            <a href="{{ route('tipos.show', $tipo->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar este tipo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
