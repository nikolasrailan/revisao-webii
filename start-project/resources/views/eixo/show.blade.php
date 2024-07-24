<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eixo | Informações</title>
</head>
<body>
    <h1>Mais informações</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <ul>
        <li>ID: {{$eixo->id}}</li>
        <li>Nome: {{$eixo->nome}}</li>
        <li>Desrição: {{$eixo->descricao}}</li>
    </ul>
</body>
</html>