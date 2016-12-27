@extends('clientes.partials.main')

@section('title', 'Crear Cliente')

@section('content')
@include('clientes.partials.navbar')
<h1 class="text-center"> Crear Cliente </h1>
@include('flash::message')
@if(Session::has('flash_message'))
{{Session::get('flash_message')}}
@endif
<div class="row">
{!! Form::model(array('route' => array('clientes.crear'))) !!}
    
    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('id_cliente', ' Id Cliente') !!}
        {!! Form::number('id_cliente', Input::old('id_cliente'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>
    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('nombre', 'Nombre del Cliente') !!}
        {!! Form::text('nombre', Input::old('nombre'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>
    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('id_usuario', 'Id Usuario') !!}
        {!! Form::number('id_usuario', Input::old('id_usuario'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>


    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('apellidos', 'Apellidos') !!}
        {!! Form::text('apellidos', Input::old('apellidos'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('direccion', 'Direccion') !!}
        {!! Form::text('direccion', Input::old('direccion'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('poblacion', 'Poblacion') !!}
        {!! Form::text('poblacion', Input::old('poblacion'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('codigopostal', 'Codigo Postal') !!}
        {!! Form::text('codigopostal', Input::old('codigopostal'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('telefono', 'Telefono') !!}
        {!! Form::number('telefono', Input::old('telefono'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-4">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control' , 'required' => 'required')) !!}
    </div>
</div>
    {!! Form::submit('Create Usuario', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}
</table>
@endsection