@extends('layouts.app')

@section('content')
    <h1>COMPONENTES</h1>

    @foreach ($componentes as $componente)
        <div class="componente">
            <a href="{{ route('componentes.show', $componente->id) }}">
                <img src="{{ $componente->img }}">
                <h2>{{ $componente->nome }}</h2>
            </a>
        </div>
    @endforeach
@endsection