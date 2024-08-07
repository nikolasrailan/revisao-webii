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
                    <td><a class="btn btn-outline-secondary" href={{asset('storage')."/".$item->url}} target='_blank'>ARQUIVO</a></td>
                    <td>
                        <form action={{route('eixo.destroy', $item->id)}} method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-outline-secondary" type="submit" value="EXCLUIR">
                        </form>
                    <a class="btn btn-outline-secondary" href={{route('report')}} target='_blank'>Relatorio</a>
                    <a class="btn btn-outline-secondary" href={{route('graph')}}>Grafico</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection