@extends('templates.main', ['title' => 'Cadastrar Eixo', 'header' => 'Novo Eixo'])
@section('content')
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <form action={{route('eixo.store')}} method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
        <input type="submit" value="Salvar">
    </form>
 @endsection