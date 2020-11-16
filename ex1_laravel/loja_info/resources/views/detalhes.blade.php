@extends('layouts.layout')

@section('content')

<h1>Loja de Informatica - Detalhes</h1>
<div class="detalhes">
    @if (isset($produto))
        <img src="{{ $produto['img'] }}" alt=" ">
        <h2> {{ $produto['nome'] }}</h2>
        <p> {{ $produto['nome'] }}<br/>
        € {{ $produto['preco'] }}</p>
    @else 
        <h1>O produto não existe</h1>
    @endif
    <a href="/produtos">Voltar aos produtos</a>
</div>
    
@endsection