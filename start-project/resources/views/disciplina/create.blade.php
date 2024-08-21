@extends('templates.main', ['title' => 'Cadastrar Disciplina', 'header' => 'Nova Disciplina'])
@section('content')
    <hr>
    <a href="{{route('disciplina.index')}}">Voltar</a>

    <form action={{route('disciplina.store')}} method="POST"  enctype="multipart/form-data">>
        @csrf
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
        <input type="submit" value="Salvar">
    </form>
 @endsection