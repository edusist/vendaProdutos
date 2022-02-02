@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">clientes</h1>
        <div class="table">
            <table class="table table-hover" id="id_tabela">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome Cliente</th>
                        <th>Email</th>
                        <th>Cpf</th>
                        <th>Endereço</th>
                        <th>Ações</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $valor)
                    <tr>

                        <td>{{ $valor->id }}</td>
                        <td>{{ $valor->nome }}</td>
                        <td>{{ $valor->email }}</td>
                        <td>{{ $valor->cpf }}</td>
                        <td>{{ $valor->endereco }}</td>



                        <td>
                            <a href="{{ route('clientes.edit', $valor->id ) }}" class="btn btn-success">Alterar</a>
                            <a href="{{ route('clientes.show', $valor->id ) }}" class="btn btn-danger">Excluir</a>

                        </td>

                    </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>

{{-- {{ $clientes->links() }} --}}

@endsection