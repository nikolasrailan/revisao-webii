@extends('templates.main', ['title' => 'Mais Informações', 'header' => 'Informações do Curso'])
@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Curso Selecionado
                    </div>
                    <div class="card-body">
                        <a href="{{ route('curso.index') }}" class="btn btn-primary mb-3">Voltar</a>

                        <ul class="list-unstyled">
                            <li><strong>ID:</strong> {{ $curso->id }}</li>
                            <li><strong>Nome:</strong> {{ $curso->nome }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
