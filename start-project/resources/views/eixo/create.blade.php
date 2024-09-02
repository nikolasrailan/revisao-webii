

 @extends('templates.main', ['title' => 'Cadastrar Eixo', 'header' => 'Novo eixo'])

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="{{ route('eixo.index') }}" class="btn btn-secondary mb-3">Voltar</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('eixo.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input class="form-control" type="text" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Eixo</label>
                                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="3"></textarea>
                                
                            </div>
                            <input type="file" id="documento" name="documento" class="form-control mb-3">

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
