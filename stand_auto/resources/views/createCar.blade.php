@extends('layouts.layout')

@section('content')

<h1>Adicionar Carro</h1>
<div class = "detalhes">
    <p class = "message"> {{session('mssg')}}</p>
    <form action="/carros" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Marca: </label>
        <input type="text" id="marca" name="marca">
        <br>
        <label for="desc">Modelo: </label>
        <input type="text" id="modelo" name="modelo">
        <br>
        <label for="name">Imagem: </label>
        <input type="file" id="url" name="url">
        <br>
        <label for="preco">Preço: </label>
        <input type="text" id="preco" name="preco">
        <br>
        <input type="submit" value="Adicionar Carro">
    </form>
    <a href="/carros">Página Anterior</a>
</div>

@endsection
