@extends('templates.main', ['title' => 'Mais Informações', 'header' => 'Informações do Curso'])
@section('content')
    <div class="d-flex justify-content-center">
        <a href="{{ route('curso.index') }}" class="btn btn-secondary mb-3">Voltar</a>


    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bg-dark ">
                        Curso Selecionado
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled">
                            <li><strong>ID:</strong> {{ $curso->id }}</li>
                            <li><strong>Nome:</strong> {{ $curso->nome }}</li>
                            <li><strong>Eixo:</strong> {{ $eixo->nome }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
