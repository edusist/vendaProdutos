@extends('layouts.app')
@section('title', 'Cadastrar produtos')

@section('content')
    <h1 class="text-center">Cadastrar produtos</h1>


    <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @include('produtos._partials.form')
        </div>
    </form>

@endsection
