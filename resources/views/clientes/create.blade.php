@extends('layouts.app')


@section('content')
<div class="container">
    <h1>agregar cliente</h1>
    <a href="{{route('clientes.index')}}">volver</a>
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">nombre:</label>
            <input type="text"class="from-control" name="nombre">

            <label for="direccion">direccion:</label>
            <input type="text"class="from-control" name="direccion">
           
            <label for="telefono">telefono:</label>
            <input type="text"class="from-control" name="telefono">
        </div>
        <button type="submit" class="btn btn-success mb-3">guardar</button>

    </form>
</div>
@endsection
