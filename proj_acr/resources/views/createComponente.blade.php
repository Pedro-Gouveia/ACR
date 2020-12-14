@extends('layouts.app')

@section('content')
    <h1>CRIAR COMPONENTE</h1>

    <p class="message">{{ session('msg') }}</p>
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
    <form action="{{ route('componentes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nome">Componente: </label>
        <input type="text" id="nome" name="nome">
        <br>

        <label for="desc">Descrição: </label>
        <input type="text" id="desc" name="desc">
        <br>

        <label for="img">Imagem: </label>
        <input type="file" id="img" name="img">
        <br>

        <label for="preco">Preço: </label>
        <input type="text" id="preco" name="preco">
        <br>

        <input type="submit" value="Criar Componente">
    </form>

    <a href="{{ route('componentes.index') }}">Voltar à Página Anterior</a>
        
@endsection