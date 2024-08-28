@extends('templates.main', ['title' => 'Cadastrar curso', 'header' => 'Novo curso'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('curso.index') }}" class="btn btn-secondary mb-3">Voltar</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('curso.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="eixo" class="form-label">Eixo</label>
                                <select class="form-select" name="eixo" id="eixo" required>
                                    <option selected disabled value="">Selecione um eixo</option>
                                    @foreach ($data as $eixo)
                                        <option value="{{ $eixo->id }}">{{ $eixo->nome }}</option>
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
