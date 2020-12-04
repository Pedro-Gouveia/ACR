@extends('layouts.app')

@section('content')

<h1>Loja de Informatica - Criar Produto</h1>
<div class = "detalhes">
    <p class = "message"> {{session('mssg')}}</p>
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome do Produto: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="desc">Descrição do Produto: </label>
        <input type="text" id="desc" name="desc">
        <br>
        <label for="name">Imagem: </label>
        <input type="file" id="url" name="url">
        <br>
        <label for="name">Preço: </label>
        <input type="text" id="preco" name="preco">
        <br>
        <br>
        <label for="tipoProduto">Tipo de produto: </label>
        <select name="tipoProduto" id="tipoProduto">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Criar Produto">
    </form>
    <a href="/produtos">Voltar aos Produtos</a>
</div>

@endsection

