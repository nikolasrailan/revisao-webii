@extends('templates.main', ['title' => 'Tabela de eixos', 'header' => 'Eixos Cadastrados'])
@section('content')
    @can('create', App\Models\Eixo::class)
    
    <div class="d-flex justify-content-center mb-4">

        <a href="{{route('eixo.create')}}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Cadastrar
        </a>
    </div>
    @endcan
    
    <!-- Tabela responsiva -->
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>
                            <!-- Botão de Informação -->
                            <a class="btn btn-outline-info btn-sm" href="{{route('eixo.show', $item->id)}}">
                                <i class="bi bi-info-circle"></i> Info
                            </a>

                            <!-- Botão de Edição -->
                            @can('edit', App\Models\Eixo::class)
                            <a class="btn btn-outline-warning btn-sm" href="{{route('eixo.edit', $item->id)}}">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            
                            <!-- Botão de Exclusão -->
                            <form action="{{route('eixo.destroy', $item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>
                            </form>
                            
                            <!-- Botão de Relatório -->
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('report')}}" target="_blank">
                                <i class="bi bi-file-earmark-text"></i> Relatório
                            </a>

                            <!-- Botão de Gráfico -->
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('graph')}}">
                                <i class="bi bi-bar-chart-line"></i> Gráfico
                            </a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
