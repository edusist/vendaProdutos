<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacaoFormulario;
use App\Models\Cliente;
use Illuminate\Http\Request;
use DateTime;

class ClientesController extends Controller
{
    private $total_paginas = 10;
    protected $valor_total = 0;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes = Cliente::all();
    

      return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacaoFormulario $request)
    {  
        //  dd($request->all());
        
        $dadosCliente = Cliente::create([

            'nome'  => $request->nome,
            'email'  => $request->email,
            'cpf'  => $request->cpf,
            'endereco'  => $request->endereco,

           ]);

           if($dadosCliente ){
            return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
        }


    }   



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente =  Cliente::where('id', $id)->first();

        if (!$cliente) :

            redirect()->back();
        endif;

        return view('clientes.edit', compact('cliente'));
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
        $cliente =  Cliente::find($id);
        //dd($cliente);

        if (!$cliente) :

            return redirect()->back();
        endif;

        $data = $request->all();

        $cliente->update($data);

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');

    }
    public function show($id)
    {
        $cliente =  Cliente::where('id', $id)->first();
        //dd($cliente);

        if (!$cliente) :

            return redirect()->route('clientes.index');
        endif;

        return view('clientes.show', compact('cliente'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente =  Cliente::find($id);
        //dd($cliente);

        if (!$cliente) :

            return redirect()->route('clientes.index');
        endif;


        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
