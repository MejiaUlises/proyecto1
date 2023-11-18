@extends('layouts.app')

@section('content')

<div class="conteiner">
    <h1>listado de clientes </h1>
    <a href="{{route('clientes.create')}}"class="btn btn-primary"> agregar cliente </a>
<table>
    <thead>
    <tr>
        <TH>ID</TH>
        <TH>NOMBRE</TH>
        <TH>DIRECCON</TH>
        <TH>TELEFONO</TH>
        </tr>
    </thead>
<tbody>
@foreach($clientes as $cliente)
<tr>
    <td>{{$cliente->id}}</td>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->direccion}}</td>
    <td>{{$cliente->telefono}}</td>
</tr>
<td>
    <form action="{{ url('clientes/'.$cliente->id )}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" >eliminar</button>
</form>
</td>
@endforeach



        </tbody>
    </table>
</div>
@endsection