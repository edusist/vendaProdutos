@extends('layouts.app')

@section('content')
<hr>
    @if (session('success'))
        <div>
            <div class="alert alert-success" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        </div>
    @endif           
               

                <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Pedido de Venda</h1>
                
                <a href="{{ route('pedidos.create') }}" class="btn btn-primary">
                    <h4>Cadastrar Pedido</h4>
                </a>
                <div class="table">
                    <table class="table table-hover" id="id_tabela">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome Cliente</th>
                                <th>Email</th>
                                <th>Cpf</th>
                                <th>Endereço</th>
                                <th>Produto</th>
                                <th>quantidade</th>   
                                <th>Valor Unitário</th>                             
                                <th>Total</th>
                                <th>Data da venda</th>
                              
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $valor)
                            <tr>

                                <td>{{ $valor->id }}</td>
                                <td>{{ $valor->nome }}</td>
                                <td>{{ $valor->email }}</td>
                                <td>{{ $valor->cpf }}</td>
                                <td>{{ $valor->endereco }}</td>
                                <td>{{ $valor->Nome_produto }}</td>
                                <td>{{ $valor->quant }}</td>                                 
                                <td>R${{ number_format($valor->valor_unitario, 2, ',', '.') }}</td>
                                <td>R${{ number_format($valor->total, 2, ',', '.') }}</td>
                                <td>{{ date("d/m/Y  H:i:s", strtotime($valor->data_venda)) }}</td> 
                                                             
                                

         <td>
           <a href="" class="btn btn-success">Alterar</a>             
            <a href="" class="btn btn-danger">Excluir</a>

        </td>

                            </tr>


                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
       
   
</div>

{{-- {{ $pedidos->links() }} --}}

@endsection