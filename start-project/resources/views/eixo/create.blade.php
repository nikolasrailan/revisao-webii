@extends('templates.main', ['title' => 'Cadastrar Eixo', 'header' => 'Novo Eixo'])
@section('content')
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>

    <form action={{route('eixo.store')}} method="POST"  enctype="multipart/form-data">>
        @csrf
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="3"></textarea>
        <input type="file" id="documento" name="documento" class="form-control">
        <input type="submit" value="Salvar">
    </form>
 @endsection