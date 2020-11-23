@extends('layouts.layout')

@section('content')

<h1>Loja de Informatica - Detalhes</h1>
<div class="detalhes">
    @if (isset($produto))
        <img src="{{ $produto->url }}" alt=" ">
        <h2> {{ $produto->nome }}</h2>
        <p> {{ $produto->desc }}<br/>
        € {{ $produto->preco }}</p>
    @else 
        <h1>O produto não existe</h1>
    @endif

    <form action="/produtos/{{$produto->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Eliminar Produto</button>
    </form>
    <a href="/produtos">Voltar aos produtos</a>
</div>
    
@endsection