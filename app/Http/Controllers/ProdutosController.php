<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("produtos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $validator  =  Validator::make($request->all(), [
            'nome_produto' => 'required|max:100',
            'valor_unitario' => 'required'
            

        ]);


        if ($validator->fails()) {
            return redirect('produtos/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
       $valor_pad_bd =  $this->formatoBd($request->valor_unitario);

       var_dump($valor_pad_bd);
    //    dd($valor_pad_bd);
        $dados = Produto::create([
            'nome' => $request->nome_produto,
            'valor_unitario' => $valor_pad_bd            

           ]);

           if($dados){
            return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto =  Produto::where('id', $id)->first();

        if (!$produto) :

            redirect()->back();
        endif;

        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto =  Produto::find($id);
        //dd($produto);

        if (!$produto) :

            return redirect()->back();
        endif;

        $data = $request->all();

        $produto->update($data);

        return redirect()->route('produtos.index')->with('success', 'Produto alterado com sucesso!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto =  Produto::where('id', $id)->first();
        // dd($produtos);

        if (!$produto) :

            return redirect()->route('produtos.index');
        endif;

        return view('produtos.show', compact('produto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto =   Produto::find($id);
        //dd($cliente);

        if (!$produto) :

            return redirect()->route('produtos.index');
        endif;


        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }

    public function formatoBd($valor) {

        $source = array('.', ',');
        $replace = array('', '.');
        $valor_bd = str_replace($source, $replace, $valor); //remove os pontos e substitui a virgula pelo ponto
        // $valor_bd = number_format($valor, 1);
        return (float)$valor_bd; //retorna o valor formatado para gravar no banco
    }
}
