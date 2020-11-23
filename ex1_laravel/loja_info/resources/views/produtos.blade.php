@extends('layouts.layout')

@section('content')

<h1>Loja de Informatica - Produtos</h1>

@foreach ($produto as $produto)
    <div class="produto">
        <a href="/produtos/{{ $produto->id }}">
            <img src="{{ $produto->url }}" alt=" ">
            <h2> {{ $produto->nome }}</h2>
        </a>
    </div>
@endforeach
<br>
<br>
<a href="/produtos/create"><h2>Adicionar Produto</h2></a> 
@endsection