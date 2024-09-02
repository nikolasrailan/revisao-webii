@extends('templates.main', ['title' => 'Editar curso', 'header' => 'Editar curso'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('curso.index') }}" class="btn btn-secondary mb-3">Voltar</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('curso.update', $curso->id) }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome" required value="{{$curso->nome}}">
                            </div>
                            <div class="mb-3">
                                <label for="eixo" class="form-label">Eixo</label>
                                <select disabled class="form-select" name="eixo" id="eixo" required>
                                    <option selected disabled value="">Selecione um eixo</option>
                                    @foreach ($eixo as $item)
                                        <option {{$curso->eixo_id == $item->id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->nome }}</option>
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
