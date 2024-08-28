@extends('templates.main', ['title' => 'Cadastrar curso', 'header' => 'Novo curso'])
@section('content')
    <hr>
    <a href="{{route('curso.index')}}">Voltar</a>

    <form action={{route('curso.store')}} method="POST"  enctype="multipart/form-data">>
        @csrf
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
        <input type="submit" value="Salvar">
        <select class="block mt-1 w-full" name="eixo" id="eixo" required>
            <option selected disabled></option>
            @foreach ($data as $eixo)
                <option value={{$eixo->id}}>{{$eixo->nome}}</option>
            @endforeach
        </select>
    </form>
 @endsection