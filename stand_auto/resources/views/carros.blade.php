@extends('layouts.layout')

@section('content')
    <h1>Carros</h1>

    @foreach ($carros as $carro)
    <div class="carro">
        <a href="/carros/{{ $carro->id }}">
            <h2>{{ $carro->marca }} {{ $carro->modelo }}</h2>
        </a>
    </div>
    @endforeach
    
@endsection