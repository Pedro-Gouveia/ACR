@extends('layouts.layout')

@section('content')

<h1>Loja de Informatica - Produtos</h1>

@foreach ($produtos as $produto)
    <div class="produto">
        <a href="/produtos/{{ $produto['id'] }}">
            <img src="{{ $produto['img'] }}" alt=" ">
            <h2> {{ $produto['nome'] }}</h2>
        </a>
    </div>
@endforeach
    
@endsection