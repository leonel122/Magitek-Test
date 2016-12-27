<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::All();
        //retornar la variable $user a la vista user/index
        return View ('clientes.index')
            //enviamos la variable user a la vista con el contenido de la variable $user
        ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $clientes = DB::table('clientes')->get();

        return view('clientes.crear', ['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->id_cliente=$request->input('id_cliente');
        $cliente->nombre=$request->input('nombre');
        $cliente->id_usuario=$request->input('id_usuario');
        $cliente->apellidos=$request->input('apellidos');
        $cliente->direccion=$request->input('direccion');
        $cliente->poblacion=$request->input('poblacion');
        $cliente->codigopostal=$request->input('codigopostal');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');
        $cliente->save();

        flash('Usuario Creado','success');
        return redirect('clientes/crear');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
