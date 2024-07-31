@extends('templates.main', ['title' => 'Alterar Eixo', 'header' => 'Modificar Eixo'])
@section('content')
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <form action={{route('eixo.update', $eixo->id)}} method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$eixo->nome}}">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="3">{{$eixo->descricao}}</textarea>
        <input type="submit" value="Salvar">
    </form>
      
@endsection