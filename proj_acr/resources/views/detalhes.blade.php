@extends('layouts.app')

@section('content')
    <h1>DETALHES</h1>
    <div class="detalhes">
        @if (isset($componente))
            <img src="{{ $componente->img }}">
            <h2>{{ $componente->nome }}</h2>
            <h2>{{ $componente->desc }}</h2>
            <h2>€ {{ $componente->preco }}</h2>
        @else
            <h1>Este componente não existe.</h1>
        @endif

        @auth
        <form action="{{ route('componentes.destroy', $componente->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar Componente</button>
        </form>

        <form action="{{ route('componentes.edit', $componente->id) }}" method="GET">
            @csrf
            <button>Editar Componente</button>
        </form>
        @endauth

        <a href="{{ route('componentes.index') }}">Voltar à Página Anterior</a>
@endsection
