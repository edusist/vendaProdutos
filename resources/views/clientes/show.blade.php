@extends('layouts.app')

@section('nome', 'Detalhes dos clientes')
@section('content')
    <div class="align-items-center">
    <a href="{{route('clientes.index')}}" class="btn btn-primary">Voltar</a>
    <h1 class="text-center mb-5">Detalhes {{ $cliente->nome }}</h1>
        <div class="col-md-12 offset-md-3">

                <p class="lead"><strong>Nome: </strong>{{ $cliente->nome }}</p>
                <p class="lead"><strong>Email: </strong>{{ $cliente->email }}</p>
                <p class="lead"><strong>Cpf: </strong>{{ $cliente->cpf }}</p>
                <p class="lead"><strong>Endereço: </strong>{{ $cliente->endereco }}</p>

            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                @csrf
                <div class="form-group">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
      

    </div>
</div>
@endsection
