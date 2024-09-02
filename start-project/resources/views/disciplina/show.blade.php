@extends('templates.main', ['title' => 'Mais Informações', 'header' => 'Informações da Disciplina'])
@section('content')
    <div class="d-flex justify-content-center">

        <a href="{{ route('disciplina.index') }}" class="btn btn-primary mb-3">Voltar</a>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Disciplina Selecionado
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled">
                            <li><strong>ID:</strong> {{ $disciplina->id }}</li>
                            <li><strong>Nome:</strong> {{ $disciplina->nome }}</li>
                            <li><strong>Curso:</strong> {{ $curso->nome }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
