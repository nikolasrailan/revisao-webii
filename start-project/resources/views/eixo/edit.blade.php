<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eixo | Editar</title>
</head>
<body>
    <h1>Alterar Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <form action={{route('eixo.update', $eixo->id)}} method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$eixo->nome}}">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="3">{{$eixo->descricao}}</textarea>
        <input type="submit" value="Salvar">
    </form>
        
</body>
</html>