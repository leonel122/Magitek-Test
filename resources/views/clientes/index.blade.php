@extends('clientes.partials.main')

@section('title', 'Todos los Clientes')

@section('content')
@include('clientes.partials.navbar')
    <h1 class="text-center"> Todos los Usuarios</h1>
@include('flash::message')
@if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
<div class="table-responsive">
<table class="table text-center table table-hover table table-striped" id="clientes">
    <thead>
        <tr>
            <td><B>#</B></td>  
            <td><B>Id Cliente</B></td>
            <td><B>Nombres</B></td>
            <td><B>Apellidos</B></td>
            <td><B>Id Usuario</B></td>
            <td><B>Direccion</B></td>
            <td><B>Poblacion</B></td>
            <td><B>Codigo Postal</B></td>
            <td><B>Telefono</B></td>
            <td><B>Email</B></td>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td><B>#</B></td> 
            <td><B>Id Cliente</B></td>
            <td><B>Nombres</B></td>
            <td><B>Apellidos</B></td>
            <td><B>Id Usuario</B></td>
            <td><B>Direccion</B></td>
            <td><B>Poblacion</B></td>
            <td><B>Codigo Postal</B></td>
            <td><B>Telefono</B></td>
            <td><B>Email</B></td>
        </tr>
    </tfoot>
    <tbody>
    @foreach($clientes as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $value->id_cliente }}</td>
            <td>{{ $value->nombre }}</td>
            <td>{{ $value->apellidos }}</td> 
            <td>{{ $value->id_usuario }}</td>
            <td>{{ $value->apellidos }}</td> 
            <td>{{ $value->apellidos }}</td> 
            <td>{{ $value->codigopostal }}</td> 
            <td>{{ $value->apellidos }}</td> 
            <td>{{ $value->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>
@endsection