@extends('layouts.app')
@section('title', 'Cadastrar pedido')

@section('content')
    <h1 class="text-center">Cadastrar pedido</h1>


    <form action="{{ route('pedidos.store') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @include('pedidos._partials.form')
        </div>
    </form>

@endsection
