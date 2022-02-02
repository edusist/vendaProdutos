@extends('layouts.app')

@section('nome', 'Detalhes dos produtos')
@section('content')
    <div class="align-items-center">
    <a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
    <h1 class="text-center mb-5">Detalhes {{ $produtos->nome }}</h1>
        <div class="col-md-12 offset-md-3">

                <p class="lead"><strong>Nome: </strong>{{ $produtos->nome }}</p>
                <p class="lead"><strong>Valor: </strong>{{ $produtos->valor_unitario }}</p>
               

            <form action="{{ route('produtos.destroy', $produtos->id) }}" method="post">
                @csrf
                <div class="form-group">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
      

    </div>
</div>
@endsection
