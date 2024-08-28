@extends('templates.main', ['title' => 'Tabela de Cursos', 'header' => 'Cursos Cadastrados'])
@section('content')
    <hr>
    @can('create', App\Models\Curso::class)
    
    <a href="{{route('curso.create')}}" class="btn btn-primary">Cadastrar</a>
    @endcan
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td><a class="btn btn-outline-secondary" href={{route('curso.show', $item->id)}}>INFO</a></td>
                    @can('edit', App\Models\Curso::class)
                        <td><a class="btn btn-outline-secondary" href={{route('curso.edit', $item->id)}}>EDIT</a></td>
                    
                        <td><a class="btn btn-outline-secondary" href={{asset('storage')."/".$item->url}} target='_blank'>ARQUIVO</a></td>
                        
                        <td>
                            <form action={{route('curso.destroy', $item->id)}} method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-secondary" type="submit" value="EXCLUIR">
                            </form>
                            <a class="btn btn-outline-secondary" href={{route('report')}} target='_blank'>Relatorio</a>
                            <a class="btn btn-outline-secondary" href={{route('graph')}}>Grafico</a>
                            @endcan

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection