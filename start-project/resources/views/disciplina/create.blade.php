@extends('templates.main', ['title' => 'Cadastrar Disciplina', 'header' => 'Nova Disciplina'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('disciplina.index') }}" class="btn btn-secondary mb-3">Voltar</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('disciplina.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="eixo" class="form-label">Curso</label>
                                <select class="form-select" name="curso" id="curso" required>
                                    <option selected disabled value="">Selecione um curso</option>
                                    @foreach ($data as $curso)
                                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
