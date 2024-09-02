@extends('templates.main', ['title' => 'Editar disciplina', 'header' => 'Editar disciplina'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('disciplina.index') }}" class="btn btn-secondary mb-3">Voltar</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('disciplina.update', $disciplina->id) }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome" required value="{{$disciplina->nome}}">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
