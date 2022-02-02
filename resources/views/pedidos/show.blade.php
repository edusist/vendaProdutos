@extends('layouts.app')

@section('nome', 'Detalhes dos pedidos')
@section('content')
    <div class="align-items-center">
    <a href="{{route('pedidos.index')}}" class="btn btn-primary">Voltar</a>
    <h1 class="text-center mb-5">Detalhes {{ $pedido->nome }}</h1>
        <div class="col-md-12 offset-md-3">

                <p class="lead"><strong>Total: </strong>{{ $pedido->total }}</p>
                <p class="lead"><strong>quantidade: </strong>{{ $pedido->quant }}</p>
                <p class="lead"><strong>Data Venda: </strong>{{ $pedido->data_venda }}</p>              

            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="post">
                @csrf
                <div class="form-group">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
      

    </div>
</div>
@endsection
