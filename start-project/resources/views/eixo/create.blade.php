<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eixo | Create</title>
</head>
<body>
    <h1>Novo eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <form action={{route('eixo.store')}} method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="3"></textarea>
        <input type="submit" value="Salvar">
    </form>
        
</body>
</html>