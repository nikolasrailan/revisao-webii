@extends('templates.main', ['title' => 'Tabela de Disciplina', 'header' => 'Disciplinas Cadastradas'])
@section('content')
    <hr>
    @can('create', App\Models\Disciplina::class)
    
    <a href="{{route('disciplina.create')}}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Cadastrar
    </a>   
    @endcan
    
    <!-- Tabela responsiva -->
    <div class="table-responsive mt-3">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nome}}</td>
                        <td>
                            <!-- Botão de Informação -->
                            <a class="btn btn-outline-info btn-sm" href="{{route('disciplina.show', $item->id)}}">
                                <i class="bi bi-info-circle"></i> Info
                            </a>

                            <!-- Botão de Edição -->
                            @can('edit', App\Models\Disciplina::class)
                            <a class="btn btn-outline-warning btn-sm" href="{{route('disciplina.edit', $item->id)}}">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
