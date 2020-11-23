@extends('layouts.layout')

@section('content')
    <h1>Detalhes</h1>
    <div class="detalhes">
        @if (isset($carro))
            <h2>{{ $carro->marca}}</h2>
            <h2>{{ $carro->modelo}}</h2>
            <p>€{{ $carro->preco}}</p>
        @else 
            <h1>O carro nao existe</h1>
        @endif
        <form action="/carros/{{$carro->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar Carro</button>
        </form>
        <a href="/carros">Página Anterior</a>
    </div>
@endsection