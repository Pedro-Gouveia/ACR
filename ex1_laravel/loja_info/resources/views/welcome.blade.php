@extends('layouts.app')

@section('content')

<h1>Loja de Informatica</h1>
<div class="intro">
    <img src="/img/loja.jpg" alt=" ">
    <br>
    <a href="{{ route('products.index') }}">Ver Produtos</a>
</div>
    
@endsection