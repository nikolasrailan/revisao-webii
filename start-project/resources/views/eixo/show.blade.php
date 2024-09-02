@extends('templates.main', ['title' => 'Mais Informações', 'header' => 'Informações do Eixo'])
@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Eixo Selecionado
                    </div>
                    <div class="card-body">
                        <a href="{{ route('eixo.index') }}" class="btn btn-primary mb-3">Voltar</a>

                        <ul class="list-unstyled">
                            <li><strong>ID:</strong> {{ $eixo->id }}</li>
                            <li><strong>Nome:</strong> {{ $eixo->nome }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
