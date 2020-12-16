@extends('layouts.app')

@section('content')
    <div class="main">
    <h1>
         @if(isset($componente))
            Editar Componente
        @else
            Criar Componente
        @endif
    </h1>
    <p class="message">{{ session('msg') }}</p>
    <div class="error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
    <form method="POST" enctype="multipart/form-data"

        @if (isset($componente))
            action="{{ route('componentes.update', $componente->id) }}"
        @else
        action="{{ route('componentes.store') }}"
        @endif
        >

        @csrf
        @if(isset($componente))
            @method('PUT')
        @endif

        <label for="nome">Componente: </label>
        <input type="text" id="nome" name="nome"

        @if (isset($componente))
            value="{{ $componente->nome }}"
        @endif
        >
        <br>

        <label for="desc">Descrição: </label>
        <input type="text" id="desc" name="desc"

        @if (isset($componente))
            value="{{ $componente->desc }}"
        @endif
        >
        <br>

        <input type="hidden" id="changed" name="changed" value="false">
        <label for="img">Imagem: </label>
        <input type="file" id="img" name="img"
            onchange="document.getElementById('changed').value='true';">
            @if (isset($componente))
            <br>
                Não escolha imagem caso não a queira alterar.
            <br>
            @endif
        <br>

        <label for="preco">Preço: </label>
        <input type="text" id="preco" name="preco"
        @if (isset($componente))
            value="{{ $componente->preco }}"
        @endif
        >
        <br>

        <label for="tipo">Tipo de Componente: </label>
        <select name="tipo" id="tipo" class="inputTipo">
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id }}"
                    @if (isset($componente) && $componente->componente_tipo_id == $tipo->id)
                        selected="selected"
                    @endif
                    >{{ $tipo->nome }}</option>
            
            @endforeach
        </select>
        <br>

        <input type="submit" 
            @if(isset($componente))
                value="Editar Componente"
            @else
                value="Criar Componente"
            @endif>
    </form>

    <a href="{{ route('componentes.index') }}">Voltar à Página Anterior</a>
    </div>   
@endsection