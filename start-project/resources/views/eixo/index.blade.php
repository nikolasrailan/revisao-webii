@extends('templates.main', ['title' => 'Tabela de eixos', 'header' => 'Eixos Cadastrados'])
@section('content')
    <hr>
    <a href="{{route('eixo.create')}}">Cadastrar</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->descricao}}</td>
                    <td><a class="btn btn-outline-secondary" href={{route('eixo.show', $item->id)}}>INFO</a></td>
                    <td><a class="btn btn-outline-secondary" href={{route('eixo.edit', $item->id)}}>EDIT</a></td>
                    <td>
                        <form action={{route('eixo.destroy', $item->id)}} method="DELETE">
                            @csrf
                            <input class="btn btn-outline-secondary" type="submit" value="EXCLUIR">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection