@extends('layouts.app')
@section('nome', 'Alterar produtos')

@section('content')
<h1 class="text-center">Alterar produto => {{ $produto->nome }}</h1>

<form action="{{ route('produtos.update', $produto->id) }}" method="post" enctype="multipart/form-data">
    {{-- Tipo de método tem ser PUT e não UPDATE --}}
    @csrf
    @method('put')
    @include('produtos._partials.form')

</form>
@endsection
