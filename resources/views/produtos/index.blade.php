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
        <h1 class="text-center">produtos</h1>
        <div class="table">
            <table class="table table-hover" id="id_tabela">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome produto</th>
                        <th>Valor</th>                     

                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $valor)
                    <tr>

                        <td>{{ $valor->id }}</td>
                        <td>{{ $valor->nome }}</td>
                        <td>R${{ number_format($valor->valor_unitario, 2, ',', '.') }}</td>                   



                        <td>
                            <a href="{{ route('produtos.edit', $valor->id ) }}" class="btn btn-success">Alterar</a>
                            <a href="{{ route('produtos.show', $valor->id ) }}" class="btn btn-danger">Excluir</a>

                        </td>

                    </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>

{{-- {{ $produtos->links() }} --}}

@endsection