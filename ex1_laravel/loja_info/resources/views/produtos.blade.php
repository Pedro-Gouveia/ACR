@extends('layouts.app')

@section('content')

<h1>Loja de Informatica - Produtos</h1>

<div class="listaTipos">
    @if(!isset($actTipo))
        <b>
    @endif
    <a href="{{route('products.index')}}">Todos os Produtos</a>
    @if(!isset($actTipo))
        </b>
    @endif
    @foreach ($tipos as $tipo)
        @if(isset($actTipo) && $actTipo == $tipo->id)
            <b>
        @endif
        <a href="{{route('products.by.tipo')}}">{{$tipo->nome}}</a>
        @if(isset($actTipo) && $actTipo == $tipo->id)
            </b>
        @endif
    @endforeach
</div>

@foreach ($produto as $produto)
    <div class="produto">
        <a href="{{ route('products.show', $produto->id) }}">
            <img src="{{ $produto->url }}" alt=" ">
            <h2> {{ $produto->nome }}</h2>
        </a>
    </div>
@endforeach
<br>
<br>
<a href="/produtos/create"><h2>Adicionar Produto</h2></a> 
@endsection