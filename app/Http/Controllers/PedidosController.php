<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class PedidosController extends Controller
{
    private $total_paginas = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Cliente::join('pedidos', 'pedidos.cliente_id', '=', 'clientes.id')
        ->join('produtos', 'produtos.id', '=', 'pedidos.produto_id')
        ->orderBy('clientes.created_at', 'ASC')
        ->select(['clientes.*', 'produtos.nome as Nome_produto', 'produtos.valor_unitario', 'pedidos.quant', 'pedidos.total', 'pedidos.data_venda'])
        ->paginate($this->total_paginas);

        return view('index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $clientes = Cliente::all();
        $produtos = Produto::all();

        return view("pedidos.create", compact('clientes', 'produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               //dd($request->all());
               $validator  =  Validator::make($request->all(), [
                'cliente_id' => 'required',
                'produto_id' => 'required',
                'quantidade' => 'required'              
    
            ]);
    
    
            if ($validator->fails()) {
                return redirect('pedidos/create')
                            ->withErrors($validator)
                            ->withInput();
            }
            
            $valor_unitario = Produto::where('id', $request->produto_id)->get();
            foreach ($valor_unitario as $key => $value) {
                $total = (float)$value->valor_unitario * $request->quantidade;
            }
            // dd($total);
            $dt = new DateTime();
            $dataAtual = $dt->format("Y-m-d H:i:s");
            
            
            $dados = Pedido::create([
                'total'       => $total,
                'data_venda'  => $dataAtual,
                'quant'       =>    $request->quantidade,
                'cliente_id'  => $request->cliente_id,
                'produto_id'  =>$request->produto_id 
    
               ]); 
    
               if($dados){
                return redirect()->route('pedidos.index')->with('success', 'Pedido cadastrado com sucesso!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
