@extends('layouts.app')
@section('nome', 'Alterar pedidos')

@section('content')
<h1>.::Alterar pedidos => {{ $pedido->nome }}::.</h1>

<form action="{{ route('pedidos.update', $pedido->id) }}" method="post" enctype="multipart/form-data">
    {{-- Tipo de método tem ser PUT e não UPDATE --}}
    @csrf
    @method('put')
    @include('pedidos._partials.form')

</form>
@endsection
