@extends('layouts.app')

@section('content')
    <div class="main">
        <h1>DETALHES</h1>
        @if (isset($componente))
            <img src="{{ $componente->img }}">
            <h2>{{ $componente->nome }}</h2>
            <h3>{{ $componente->desc }}</h3>
            <h3>€ {{ $componente->preco }}</h3>
        @else
            <h1>Este componente não existe.</h1>
        @endif

        @auth
        @if ($componente->created_by == auth()->user()->id || auth()->user()->IsAdmin)
        <form action="{{ route('componentes.destroy', $componente->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar Componente</button>
        </form>

        <form action="{{ route('componentes.edit', $componente->id) }}" method="GET">
            @csrf
            <button>Editar Componente</button>
        </form>
        @endif
        @endauth

        <a href="{{ route('componentes.index') }}">Voltar à Página Anterior</a>
    </div>
@endsection
