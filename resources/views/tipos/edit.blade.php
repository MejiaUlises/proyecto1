@extends('layouts.crud')

@section('content')
    <div class="container">
        <h2>Editar Tipo</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tipos.update', $tipo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $tipo->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Tipo</button>
        </form>
    </div>
@endsection
