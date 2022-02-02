@extends('layouts.app')
@section('title', 'Cadastrar Cliente')

@section('content')
    <h1 class="text-center">Cadastrar Cliente</h1>


    <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @include('clientes._partials.form')
        </div>
    </form>

@endsection
