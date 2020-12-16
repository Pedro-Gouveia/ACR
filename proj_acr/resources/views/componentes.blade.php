@extends('layouts.app')

@section('content')

    {{-- <div>
        @if(!isset($actTipo))
            <b>
        @endif
        <a href="{{ route('componentes.index') }}">Todos os Componentes</a>
        @if(!isset($actTipo))
            </b>
        @endif

        @foreach ($tipos as $tipo)
            @if(isset($actTipo) && $actTipo == $tipo->id)
                <b>
            @endif
            <a href="{{ route('componentes.por.tipo', $tipo->id) }}">{{ $tipo->nome }}</a>
            @if(isset($actTipo) && $actTipo == $tipo->id)
                </b>
            @endif
        @endforeach
    </div> --}}

    <div class="componentes">
    @foreach ($componentes as $componente)
        
        <a class="componenteBorder" href="{{ route('componentes.show', $componente->id) }}">
            <img class="componente" src="{{ $componente->img }}">
            <h2>{{ $componente->nome }}</h2>
        </a>
        
    @endforeach
    </div>
@endsection