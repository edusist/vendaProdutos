@extends('layouts.app')
@section('nome', 'Alterar clientes')

@section('content')
<h1>.::Alterar clientes => {{ $cliente->nome }}::.</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="post" enctype="multipart/form-data">
    {{-- Tipo de método tem ser PUT e não UPDATE --}}
    @csrf
    @method('put')
    @include('clientes._partials.form')

</form>
@endsection
