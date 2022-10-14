<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->Nombre = $request -> get('nombre');
        $clientes->Apellido = $request -> get('apellido');
        $clientes->Correo = $request -> get('correo');
        $clientes->Telefono = $request -> get('telefono');
        $clientes->CP = $request -> get('cp');

        $clientes->save();
        return redirect('/clientes');
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
        $clientes = Cliente::find($id);
        return view('cliente.edit', compact('clientes'));
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
        $cliente = Cliente::find($id);
        $cliente->Nombre=$request->get('nombre');
        $cliente->Apellido=$request->get('apellido');
        $cliente->Correo=$request->get('correo');
        $cliente->Telefono=$request->get('telefono');
        $cliente->CP=$request->get('cp');

        $cliente->save();
        return  redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');    }
}
